<?php

return [
    'resource' => [
        'label' => 'Tedarikçi',
        'plural_label' => 'Tedarikçiler',
    ],

    'fields' => [
        'name' => 'Ad',
        'role' => 'Rol',
        'risk' => 'Risk',
        'services' => 'Hizmetler',
        'business_purpose' => 'İş amacı',
        'data_categories' => 'Açıklanan kişisel bilgiler',
        'contact' => 'İletişim',
        'dpa_signed_at' => 'Sözleşme imza tarihi',
        'dpa_expires_at' => 'Sözleşme bitiş tarihi',
        'dpa_checklist' => 'Sözleşme kapsamı',
        'notes' => 'Notlar',
        'issues' => 'Eksikler',
        'no_issues' => 'Yok',
        'next_review' => 'Sonraki inceleme',
    ],

    'sections' => [
        'agreement' => 'Yazılı sözleşme',
    ],

    'help' => [
        'business_purpose' => 'Sözleşmenin kişisel bilgilerin kullanımını sınırladığı belirli amaç.',
        'agreement' => 'Hizmet sağlayıcılar ve yükleniciler için Yönetmelik §7051(a), üçüncü taraflar için §7053 hükümleri gerekir. Hükümleri görmek için rolü seçin.',
        'terminate' => 'Tedarikçi bundan sonra kişisel bilgileri silmek veya iade etmek zorundadır.',
    ],

    'filters' => [
        'active' => 'Aktif',
    ],

    'roles' => [
        'service_provider' => 'Hizmet sağlayıcı',
        'contractor' => 'Yüklenici',
        'third_party' => 'Üçüncü taraf',
    ],

    'risks' => [
        'low' => 'Düşük',
        'medium' => 'Orta',
        'high' => 'Yüksek',
    ],

    'issues' => [
        'agreement_missing' => 'İmzalı sözleşme yok',
        'agreement_expired' => 'Sözleşmenin süresi doldu',
        'agreement_incomplete' => 'Sözleşme eksik',
        'review_due' => 'İnceleme zamanı geldi',
        'data_return_pending' => 'Veri iadesi bekleniyor',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Kişisel bilgilerin satılmasını veya paylaşılmasını yasaklar',
        'specified_purpose' => 'İşlemenin belirli iş amacını belirtir',
        'purpose_limitation' => 'Başka herhangi bir amaçla veya doğrudan ilişki dışında saklanmasını, kullanılmasını veya açıklanmasını yasaklar',
        'no_combining' => 'İzin verilen haller dışında diğer kaynaklardan gelen kişisel bilgilerle birleştirilmesini yasaklar',
        'same_protection' => 'CCPA\'ya uyum ve aynı düzeyde gizlilik koruması gerektirir',
        'reasonable_steps' => 'Kullanımın yükümlülüklerimizle uyumlu olmasını sağlamak için makul adımlar atmamıza izin verir',
        'notify_if_unable' => 'Yükümlülüklerini artık yerine getiremezse bildirim yapılmasını gerektirir',
        'stop_and_remediate' => 'Yetkisiz kullanımı durdurmamıza ve düzeltmemize izin verir',
        'subcontractors' => 'Aynı koşullara bağlı alt yüklenicilerin bildirilmesini gerektirir',
        'consumer_requests' => 'Tüketici taleplerinde iş birliği gerektirir',
        'certification' => 'Yüklenici kısıtlamaları anladığını ve bunlara uyacağını taahhüt eder',
        'limited_purposes' => 'Kullanımı satış veya paylaşımın belirtilen amaçlarıyla sınırlar',
    ],

    'actions' => [
        'review' => 'İncelendi olarak işaretle',
        'terminate' => 'İlişkiyi sonlandır',
        'data_returned' => 'Veriler silindi veya iade edildi',
    ],

    'notifications' => [
        'reviewed' => 'Tedarikçi incelendi',
    ],
];
