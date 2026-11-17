<?php

return [
    'resource' => [
        'label' => 'Yetkazib beruvchi',
        'plural_label' => 'Yetkazib beruvchilar',
    ],

    'fields' => [
        'name' => 'Nomi',
        'role' => 'Rol',
        'risk' => 'Xavf',
        'services' => 'Xizmatlar',
        'business_purpose' => 'Biznes maqsadi',
        'data_categories' => 'Oshkor qilinadigan shaxsiy maʼlumotlar',
        'contact' => 'Aloqa',
        'dpa_signed_at' => 'Shartnoma imzolangan',
        'dpa_expires_at' => 'Shartnoma tugaydi',
        'dpa_checklist' => 'Shartnoma qamrab oladi',
        'notes' => 'Izohlar',
        'issues' => 'Muammolar',
        'no_issues' => 'Yo\'q',
        'next_review' => 'Keyingi tekshiruv',
    ],

    'sections' => [
        'agreement' => 'Yozma shartnoma',
    ],

    'help' => [
        'business_purpose' => 'Shartnoma shaxsiy maʼlumotlardan foydalanishni cheklaydigan aniq maqsad.',
        'agreement' => 'Xizmat koʻrsatuvchilar va pudratchilar uchun Qoidalar §7051(a), uchinchi tomonlar uchun §7053 shartlari kerak. Shartlarni koʻrish uchun rolni tanlang.',
        'terminate' => 'Shundan soʻng yetkazib beruvchi shaxsiy maʼlumotlarni oʻchirishi yoki qaytarishi kerak.',
    ],

    'filters' => [
        'active' => 'Faol',
    ],

    'roles' => [
        'service_provider' => 'Xizmat koʻrsatuvchi',
        'contractor' => 'Pudratchi',
        'third_party' => 'Uchinchi tomon',
    ],

    'risks' => [
        'low' => 'Past',
        'medium' => 'O\'rta',
        'high' => 'Yuqori',
    ],

    'issues' => [
        'agreement_missing' => 'Imzolangan shartnoma yo\'q',
        'agreement_expired' => 'Shartnoma muddati tugagan',
        'agreement_incomplete' => 'Shartnoma to\'liq emas',
        'review_due' => 'Tekshiruv vaqti keldi',
        'data_return_pending' => 'Ma\'lumotlarni qaytarish kutilmoqda',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Shaxsiy maʼlumotlarni sotish yoki ulashishni taqiqlaydi',
        'specified_purpose' => 'Qayta ishlashning aniq biznes maqsadini belgilaydi',
        'purpose_limitation' => 'Ularni boshqa maqsadda yoki bevosita munosabatdan tashqarida saqlash, foydalanish yoki oshkor qilishni taqiqlaydi',
        'no_combining' => 'Ruxsat etilgan hollardan tashqari, ularni boshqa manbalardagi shaxsiy maʼlumotlar bilan birlashtirishni taqiqlaydi',
        'same_protection' => 'CCPA ga rioya qilish va maxfiylikni bir xil darajada himoya qilishni talab qiladi',
        'reasonable_steps' => 'Foydalanish majburiyatlarimizga mos boʻlishi uchun oqilona choralar koʻrishimizga imkon beradi',
        'notify_if_unable' => 'Majburiyatlarini bajara olmay qolsa, xabar berishni talab qiladi',
        'stop_and_remediate' => 'Ruxsatsiz foydalanishni toʻxtatish va bartaraf etishga imkon beradi',
        'subcontractors' => 'Xuddi shu shartlar bilan bogʻlangan subpudratchilar haqida xabar berishni talab qiladi',
        'consumer_requests' => 'Isteʼmolchi soʻrovlarida hamkorlikni talab qiladi',
        'certification' => 'Pudratchi cheklovlarni tushunishini va ularga rioya qilishini tasdiqlaydi',
        'limited_purposes' => 'Foydalanishni sotish yoki ulashishning belgilangan maqsadlari bilan cheklaydi',
    ],

    'actions' => [
        'review' => 'Tekshirilgan deb belgilash',
        'terminate' => 'Hamkorlikni tugatish',
        'data_returned' => 'Ma\'lumotlar o\'chirildi yoki qaytarildi',
    ],

    'notifications' => [
        'reviewed' => 'Yetkazib beruvchi tekshirildi',
    ],
];
