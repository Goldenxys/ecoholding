/**
 * ECO+HOLDING - Système de Notifications
 * Toast popups (succès, erreur, avertissement, info) + Modales de confirmation
 */

(function () {
    'use strict';

    // ==================== TOAST NOTIFICATIONS ====================

    /** Conteneur global des toasts */
    function getOrCreateContainer() {
        let container = document.getElementById('eco-toast-container');
        if (!container) {
            container = document.createElement('div');
            container.id = 'eco-toast-container';
            document.body.appendChild(container);
        }
        return container;
    }

    const ICONS = {
        success: '<i class="fas fa-check-circle"></i>',
        error:   '<i class="fas fa-times-circle"></i>',
        warning: '<i class="fas fa-exclamation-triangle"></i>',
        info:    '<i class="fas fa-info-circle"></i>',
    };

    /**
     * Affiche un toast popup.
     * @param {string} message  - Texte à afficher
     * @param {'success'|'error'|'warning'|'info'} type - Type de notification
     * @param {number} duration - Durée en ms avant disparition (0 = pas d'auto-close)
     */
    function showToast(message, type, duration) {
        type = type || 'info';
        duration = duration !== undefined ? duration : 5000;

        var container = getOrCreateContainer();

        var toast = document.createElement('div');
        toast.className = 'eco-toast eco-toast--' + type;
        toast.innerHTML =
            '<div class="eco-toast__icon">' + (ICONS[type] || ICONS.info) + '</div>' +
            '<div class="eco-toast__message">' + escapeHtml(message) + '</div>' +
            '<button class="eco-toast__close" aria-label="Fermer">&times;</button>';

        var closeBtn = toast.querySelector('.eco-toast__close');
        closeBtn.addEventListener('click', function () {
            dismissToast(toast);
        });

        container.appendChild(toast);

        // Forcer le reflow pour déclencher l'animation
        toast.offsetHeight;
        toast.classList.add('eco-toast--visible');

        if (duration > 0) {
            setTimeout(function () {
                dismissToast(toast);
            }, duration);
        }

        return toast;
    }

    function dismissToast(toast) {
        if (!toast || !toast.parentElement) return;
        toast.classList.remove('eco-toast--visible');
        toast.classList.add('eco-toast--hiding');
        setTimeout(function () {
            if (toast.parentElement) toast.remove();
        }, 400);
    }

    // ==================== CONFIRMATION MODAL ====================

    /**
     * Affiche une modale de confirmation stylisée.
     * @param {Object} options
     * @param {string} options.title       - Titre de la modale
     * @param {string} options.message     - Message de confirmation
     * @param {'danger'|'warning'|'info'} options.type - Type visuel
     * @param {string} options.confirmText - Texte du bouton confirmer
     * @param {string} options.cancelText  - Texte du bouton annuler
     * @param {Function} options.onConfirm - Callback si confirmé
     * @param {Function} options.onCancel  - Callback si annulé
     */
    function showConfirm(options) {
        var opts = Object.assign({
            title: 'Confirmation',
            message: 'Êtes-vous sûr de vouloir continuer ?',
            type: 'danger',
            confirmText: 'Confirmer',
            cancelText: 'Annuler',
            onConfirm: null,
            onCancel: null,
        }, options || {});

        var MODAL_ICONS = {
            danger:  '<i class="fas fa-exclamation-triangle"></i>',
            warning: '<i class="fas fa-exclamation-circle"></i>',
            info:    '<i class="fas fa-question-circle"></i>',
        };

        var overlay = document.createElement('div');
        overlay.className = 'eco-modal-overlay';

        overlay.innerHTML =
            '<div class="eco-modal eco-modal--' + opts.type + '">' +
                '<div class="eco-modal__icon">' + (MODAL_ICONS[opts.type] || MODAL_ICONS.info) + '</div>' +
                '<h3 class="eco-modal__title">' + escapeHtml(opts.title) + '</h3>' +
                '<p class="eco-modal__message">' + escapeHtml(opts.message) + '</p>' +
                '<div class="eco-modal__actions">' +
                    '<button class="eco-modal__btn eco-modal__btn--cancel">' + escapeHtml(opts.cancelText) + '</button>' +
                    '<button class="eco-modal__btn eco-modal__btn--confirm eco-modal__btn--' + opts.type + '">' + escapeHtml(opts.confirmText) + '</button>' +
                '</div>' +
            '</div>';

        document.body.appendChild(overlay);

        // Forcer le reflow
        overlay.offsetHeight;
        overlay.classList.add('eco-modal-overlay--visible');

        var modal = overlay.querySelector('.eco-modal');
        var cancelBtn = overlay.querySelector('.eco-modal__btn--cancel');
        var confirmBtn = overlay.querySelector('.eco-modal__btn--confirm');

        function close() {
            overlay.classList.remove('eco-modal-overlay--visible');
            setTimeout(function () {
                if (overlay.parentElement) overlay.remove();
            }, 300);
        }

        cancelBtn.addEventListener('click', function () {
            close();
            if (typeof opts.onCancel === 'function') opts.onCancel();
        });

        confirmBtn.addEventListener('click', function () {
            close();
            if (typeof opts.onConfirm === 'function') opts.onConfirm();
        });

        // Fermer en cliquant en dehors de la modale
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                close();
                if (typeof opts.onCancel === 'function') opts.onCancel();
            }
        });

        // Fermer avec Escape
        function onKeydown(e) {
            if (e.key === 'Escape') {
                close();
                if (typeof opts.onCancel === 'function') opts.onCancel();
                document.removeEventListener('keydown', onKeydown);
            }
        }
        document.addEventListener('keydown', onKeydown);
    }

    // ==================== HELPERS ====================

    function escapeHtml(str) {
        var div = document.createElement('div');
        div.appendChild(document.createTextNode(str));
        return div.innerHTML;
    }

    /**
     * Attache automatiquement des modales de confirmation sur les formulaires
     * de suppression qui ont la classe .eco-confirm-delete
     */
    function initConfirmDeleteForms() {
        var forms = document.querySelectorAll('.eco-confirm-delete');
        forms.forEach(function (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                var formEl = this;
                showConfirm({
                    title: formEl.dataset.confirmTitle || 'Supprimer ?',
                    message: formEl.dataset.confirmMessage || 'Cette action est irréversible. Voulez-vous vraiment continuer ?',
                    type: 'danger',
                    confirmText: formEl.dataset.confirmBtn || 'Supprimer',
                    cancelText: 'Annuler',
                    onConfirm: function () {
                        formEl.submit();
                    },
                });
            });
        });
    }

    // ==================== INIT ====================

    document.addEventListener('DOMContentLoaded', function () {
        initConfirmDeleteForms();
    });

    // Exposer l'API globale
    window.EcoNotify = {
        success: function (msg, duration) { return showToast(msg, 'success', duration); },
        error:   function (msg, duration) { return showToast(msg, 'error', duration); },
        warning: function (msg, duration) { return showToast(msg, 'warning', duration); },
        info:    function (msg, duration) { return showToast(msg, 'info', duration); },
        confirm: showConfirm,
    };
})();
