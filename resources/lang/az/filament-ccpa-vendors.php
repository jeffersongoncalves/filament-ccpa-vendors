<?php

return [
    'resource' => [
        'label' => 'Təchizatçı',
        'plural_label' => 'Təchizatçılar',
    ],

    'fields' => [
        'name' => 'Ad',
        'role' => 'Rol',
        'risk' => 'Risk',
        'services' => 'Xidmətlər',
        'business_purpose' => 'Biznes məqsədi',
        'data_categories' => 'Açıqlanan şəxsi məlumatlar',
        'contact' => 'Əlaqə',
        'dpa_signed_at' => 'Müqavilə imzalanıb',
        'dpa_expires_at' => 'Müqavilənin bitmə tarixi',
        'dpa_checklist' => 'Müqavilə əhatə edir',
        'notes' => 'Qeydlər',
        'issues' => 'Problemlər',
        'no_issues' => 'Yoxdur',
        'next_review' => 'Növbəti yoxlama',
    ],

    'sections' => [
        'agreement' => 'Yazılı müqavilə',
    ],

    'help' => [
        'business_purpose' => 'Müqavilənin şəxsi məlumatlardan istifadəni məhdudlaşdırdığı konkret məqsəd.',
        'agreement' => 'Xidmət təminatçıları və podratçılar üçün Qaydalar §7051(a), üçüncü tərəflər üçün §7053 şərtləri tələb olunur. Şərtləri görmək üçün rolu seçin.',
        'terminate' => 'Bundan sonra təchizatçı şəxsi məlumatları silməli və ya qaytarmalıdır.',
    ],

    'filters' => [
        'active' => 'Aktiv',
    ],

    'roles' => [
        'service_provider' => 'Xidmət təminatçısı',
        'contractor' => 'Podratçı',
        'third_party' => 'Üçüncü tərəf',
    ],

    'risks' => [
        'low' => 'Aşağı',
        'medium' => 'Orta',
        'high' => 'Yüksək',
    ],

    'issues' => [
        'agreement_missing' => 'İmzalanmış müqavilə yoxdur',
        'agreement_expired' => 'Müqavilənin müddəti bitib',
        'agreement_incomplete' => 'Müqavilə natamamdır',
        'review_due' => 'Yoxlama vaxtı çatıb',
        'data_return_pending' => 'Məlumatların qaytarılması gözlənilir',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Şəxsi məlumatların satılmasını və ya paylaşılmasını qadağan edir',
        'specified_purpose' => 'Emalın konkret biznes məqsədini müəyyən edir',
        'purpose_limitation' => 'Onların hər hansı başqa məqsədlə və ya birbaşa münasibətdən kənarda saxlanmasını, istifadəsini və ya açıqlanmasını qadağan edir',
        'no_combining' => 'İcazə verilən hallar istisna olmaqla, onların digər mənbələrdən olan şəxsi məlumatlarla birləşdirilməsini qadağan edir',
        'same_protection' => 'CCPA-ya uyğunluğu və eyni səviyyədə məxfilik qorunmasını tələb edir',
        'reasonable_steps' => 'İstifadənin öhdəliklərimizə uyğun olmasını təmin etmək üçün ağlabatan addımlar atmağa imkan verir',
        'notify_if_unable' => 'Öhdəliklərini artıq yerinə yetirə bilmədikdə bildiriş tələb edir',
        'stop_and_remediate' => 'İcazəsiz istifadəni dayandırmağa və aradan qaldırmağa imkan verir',
        'subcontractors' => 'Eyni şərtlərlə bağlı subpodratçılar barədə bildiriş tələb edir',
        'consumer_requests' => 'İstehlakçı sorğularında əməkdaşlıq tələb edir',
        'certification' => 'Podratçı məhdudiyyətləri başa düşdüyünü və onlara əməl edəcəyini təsdiqləyir',
        'limited_purposes' => 'İstifadəni satış və ya paylaşmanın göstərilən məqsədləri ilə məhdudlaşdırır',
    ],

    'actions' => [
        'review' => 'Yoxlanılmış kimi qeyd et',
        'terminate' => 'Əlaqəni bitir',
        'data_returned' => 'Məlumatlar silindi və ya qaytarıldı',
    ],

    'notifications' => [
        'reviewed' => 'Təchizatçı yoxlanıldı',
    ],
];
