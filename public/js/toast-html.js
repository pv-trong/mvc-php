window.toastHtml =  {
    Success: `<div class="toast fade" id="notificationToastSuccess">
        <div class="notification">
            <div class="notification-content">
                <div class="mr-3">
                    <span class="text-2xl text-emerald-400">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
                <div class="mr-4">
                    <div class="notification-title">Success</div>
                    <div class="notification-description"></div>
                </div>
            </div>
        </div>
    </div>`,
    Info: `<div class="toast fade" id="notificationToastInfo">
        <div class="notification">
            <div class="notification-content">
                <div class="mr-3">
                    <span class="text-2xl text-blue-400">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
                <div class="mr-4">
                    <div class="notification-title">Info</div>
                    <div class="notification-description"></div>
                </div>
            </div>
        </div>
    </div>`,
    Danger: `<div class="toast fade" id="notificationToastDanger">
        <div class="notification">
            <div class="notification-content">
                <div class="mr-3">
                    <span class="text-2xl text-red-400">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
                <div class="mr-4">
                    <div class="notification-title">Failed</div>
                    <div class="notification-description"></div>
                </div>
            </div>
        </div>
    </div>`,
    Warning: `<div class="toast fade" id="notificationToastWarning">
        <div class="notification">
            <div class="notification-content">
                <div class="mr-3">
                    <span class="text-2xl text-yellow-400">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
                <div class="mr-4">
                    <div class="notification-title">Warning</div>
                    <div class="notification-description"></div>
                </div>
            </div>
        </div>
    </div>`
}