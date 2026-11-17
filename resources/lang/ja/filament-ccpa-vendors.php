<?php

return [
    'resource' => [
        'label' => '委託先',
        'plural_label' => '委託先',
    ],

    'fields' => [
        'name' => '名称',
        'role' => '役割',
        'risk' => 'リスク',
        'services' => 'サービス',
        'business_purpose' => '事業目的',
        'data_categories' => '開示する個人情報',
        'contact' => '連絡先',
        'dpa_signed_at' => '契約締結日',
        'dpa_expires_at' => '契約満了日',
        'dpa_checklist' => '契約の対象',
        'notes' => 'メモ',
        'issues' => '課題',
        'no_issues' => 'なし',
        'next_review' => '次回レビュー',
    ],

    'sections' => [
        'agreement' => '書面契約',
    ],

    'help' => [
        'business_purpose' => '契約が個人情報の利用を限定する具体的な目的。',
        'agreement' => 'サービスプロバイダーと請負業者には規則 §7051(a) の条項が、第三者には §7053 の条項が必要です。役割を選ぶと条項が表示されます。',
        'terminate' => 'その後、ベンダーは個人情報を削除または返還する必要があります。',
    ],

    'filters' => [
        'active' => '有効',
    ],

    'roles' => [
        'service_provider' => 'サービスプロバイダー',
        'contractor' => '請負業者',
        'third_party' => '第三者',
    ],

    'risks' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'issues' => [
        'agreement_missing' => '署名済みの契約なし',
        'agreement_expired' => '契約期限切れ',
        'agreement_incomplete' => '契約が不完全',
        'review_due' => 'レビュー期限',
        'data_return_pending' => 'データ返却待ち',
    ],

    'checklist' => [
        'no_sale_or_sharing' => '個人情報の販売または共有を禁止している',
        'specified_purpose' => '処理の具体的な事業目的を特定している',
        'purpose_limitation' => 'その他の目的または直接の関係外での保持・利用・開示を禁止している',
        'no_combining' => '許可される場合を除き、他の情報源の個人情報との結合を禁止している',
        'same_protection' => 'CCPA の遵守と同等のプライバシー保護を求めている',
        'reasonable_steps' => '利用が当社の義務に沿うよう合理的な措置を講じることを認めている',
        'notify_if_unable' => '義務を果たせなくなった場合の通知を求めている',
        'stop_and_remediate' => '不正な利用を停止し是正することを認めている',
        'subcontractors' => '同じ条件に拘束される再委託先の通知を求めている',
        'consumer_requests' => '消費者リクエストへの協力を求めている',
        'certification' => '請負業者が制限を理解し遵守することを証明している',
        'limited_purposes' => '利用を販売または共有の特定目的に限定している',
    ],

    'actions' => [
        'review' => 'レビュー済みにする',
        'terminate' => '取引を終了',
        'data_returned' => 'データ削除・返却済み',
    ],

    'notifications' => [
        'reviewed' => '委託先をレビューしました',
    ],
];
