<?php

return [
    'account-overview' => 'بيانات حسابك',
    'twofactor-messagebox' => 'يجب عليك تفعيل التحقق بخطوتين للإستمرار.',
    'apikey' => 'API مفتاح',
    'sshkey' => 'SSH مفتاح',

    'update-password' => [
        'current' => 'كلمة المرور الحالية',
        'new' => 'كلمة المرور الجديدة',
        'requirements' => 'يجب أن تتكون كلمة المرور الجديدة من 8 أحرف على الأقل وأن تكون خاصة لهذا الموقع.',
        'confirm' => 'تأكيد كلمة المرور الجديدة',
        'update' => 'تحديث كلمة المرور',
    ],

    'update-email' => [
        'isUpdated' => 'تم تغيير ايميلك الأساسي',
        'update' => 'تحديث الايميل',
        'email' => 'الايميل',
        'confirm' => 'كلمة المرور للتأكيد',
    ],

    'appearance' => [
        'title' => 'مظهر',
        'lightDarkMode' => 'Light/Dark Mode',
        'light' => 'فاتح',
        'dark' => 'غامق',
        'language' => 'لغة اللوحة',
        'panel-sounds' => 'اصوات اللوحة',
        'on' => 'مفعل',
        'off' => 'غير مفعل',
    ],

    'twofactor' => [
        'title' => 'التحقق بخطوتين',
        'isEnabled' => 'التحقق بخطوتين مفعل حالياً في حسابك.',
        'isDisabled' => 'لم يتم تفعيل التحقق بخطوتين حالياً في حسابك. انقر فوق الزر أدناه لبدء تفعيله.',
        'disable' => 'تعطيل التحقق بخطوتين',
        'enable' => 'تفعيل التحقق بخطوتين',
        
        'disable-dialog' => [
            'password' => 'كلمة المرور',
            'cancel' => 'الغاء',
            'must-enter-password' => 'يجب عليك كتابة كلمة مرور حسابك للإستمرار',
            'disable' => 'Disable',
        ],

        'setup-dialog' => [
            'description' => 'قم بمسح رمز الاستجابة السريعة أعلاه باستخدام تطبيق التحقق بـ خطوتين الذي تختاره. ثم أدخل الرمز المكون من 6 أرقام الذي تم إنشاؤه في الخانة أدناه.',
            'account-password' => 'كلمة مرور الحساب',
            'qrcode-loading' => 'في انتظار تحميل رمز الاستجابة السريعة...',
            'enter-6digit-password' => 'يجب عليك إدخال الرمز المكون من 6 أرقام وكلمة المرور الخاصة بك للمتابعة.',
            'enable' => 'تفعيل',
            'cancel' => 'الغاء',
        ],
    ],

    'apiKey' => [
        'label' => 'الوصف',
        'description' => 'وصف لـ استخدامك (API)',
        'allowedIPs-label' => 'الايبي المسموح به',
        'allowedIPs-description' => 'أتركه فارغاً في حال كنت تريد ان تسمح لأي أيبي يمكنه الإتصال , أو ضع أيبي في كل سطر.',
        'createButton' => 'إنشاء',

        'your-keys' => 'مفاتيحك الخاصة (API)',
        'store-save' => 'المفتاح ظاهر ادناه يكمنك نسخة وحفظه الآن بمكان آمن , لأنه لن يتم عرضه مره أخرى.',
        'close' => 'Close',

        'delete-api-key' => 'Delete API Key',
        'delete-key' => 'Delete Key',
        'all-requests-invalidated-1' => 'All requests using the',
        'all-requests-invalidated-2' => 'key will be invalidated.',
        'loading' => 'Loading...',
        'no-key-found' => 'No API keys exist for this account.',
        'last-used' => 'Last used',
    ],

    'sshKey' => [
        'loading' => 'Loading...',
        'no-key-found' => 'No SSH Keys exist for this account.',
        'added-on' => 'Added on',

        'createForm' => [
            'key-name' => 'SSH Key Name',
            'public-key' => 'Public Key',
            'public-key-desc' => 'Enter your public SSH key.',
            'save' => 'save',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Delete SSH Key',
            'delete-key' => 'Delete Key',
            'will-invalidate-1' => 'Removing the',
            'will-invalidate-2' => 'SSH key will invalidate its usage across the Panel.',
        ],
    ],

    'recoveryTokensDialog' => [
        'title' => 'Two-Step Authentication Enabled',
        'description' => 'Store the codes below somewhere safe. If you lose access to your phone you can use these backup codes to sign in.',
        'alert' => 'These codes will not be shown again.',
        'doneButton' => 'Done',
    ],
];
