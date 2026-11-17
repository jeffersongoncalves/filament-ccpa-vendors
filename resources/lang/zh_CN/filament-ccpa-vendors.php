<?php

return [
    'resource' => [
        'label' => '供应商',
        'plural_label' => '供应商',
    ],

    'fields' => [
        'name' => '名称',
        'role' => '角色',
        'risk' => '风险',
        'services' => '服务',
        'business_purpose' => '业务目的',
        'data_categories' => '披露的个人信息',
        'contact' => '联系方式',
        'dpa_signed_at' => '合同签署日期',
        'dpa_expires_at' => '合同到期日期',
        'dpa_checklist' => '合同涵盖',
        'notes' => '备注',
        'issues' => '问题',
        'no_issues' => '无',
        'next_review' => '下次审查',
    ],

    'sections' => [
        'agreement' => '书面合同',
    ],

    'help' => [
        'business_purpose' => '合同将个人信息的使用限定于的具体目的。',
        'agreement' => '服务提供商和承包商需要法规 §7051(a) 的条款，第三方需要 §7053 的条款。选择角色即可查看其条款。',
        'terminate' => '此后，供应商须删除或返还个人信息。',
    ],

    'filters' => [
        'active' => '有效',
    ],

    'roles' => [
        'service_provider' => '服务提供商',
        'contractor' => '承包商',
        'third_party' => '第三方',
    ],

    'risks' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'issues' => [
        'agreement_missing' => '没有已签署的合同',
        'agreement_expired' => '合同已过期',
        'agreement_incomplete' => '合同不完整',
        'review_due' => '需要审查',
        'data_return_pending' => '数据返还待处理',
    ],

    'checklist' => [
        'no_sale_or_sharing' => '禁止出售或共享个人信息',
        'specified_purpose' => '明确处理的具体业务目的',
        'purpose_limitation' => '禁止为任何其他目的或在直接业务关系之外保留、使用或披露',
        'no_combining' => '除允许的情形外，禁止与其他来源的个人信息合并',
        'same_protection' => '要求遵守 CCPA 并提供同等水平的隐私保护',
        'reasonable_steps' => '允许我们采取合理措施，确保其使用符合我们的义务',
        'notify_if_unable' => '要求其在无法继续履行义务时发出通知',
        'stop_and_remediate' => '允许我们制止并纠正未经授权的使用',
        'subcontractors' => '要求告知受相同条款约束的分包商',
        'consumer_requests' => '要求配合处理消费者请求',
        'certification' => '承包商证明其理解并将遵守相关限制',
        'limited_purposes' => '将使用限定于出售或共享的指定目的',
    ],

    'actions' => [
        'review' => '标记为已审查',
        'terminate' => '终止合作',
        'data_returned' => '数据已删除或返还',
    ],

    'notifications' => [
        'reviewed' => '供应商已审查',
    ],
];
