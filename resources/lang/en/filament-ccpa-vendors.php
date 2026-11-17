<?php

return [
    'resource' => [
        'label' => 'Vendor',
        'plural_label' => 'Vendors',
    ],

    'fields' => [
        'name' => 'Name',
        'role' => 'Role',
        'risk' => 'Risk',
        'services' => 'Services',
        'business_purpose' => 'Business purpose',
        'data_categories' => 'Personal information disclosed',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contract signed on',
        'dpa_expires_at' => 'Contract expires on',
        'dpa_checklist' => 'The contract covers',
        'notes' => 'Notes',
        'issues' => 'Issues',
        'no_issues' => 'None',
        'next_review' => 'Next review',
    ],

    'sections' => [
        'agreement' => 'Written contract',
    ],

    'help' => [
        'business_purpose' => 'The specific purpose the contract limits the use of the personal information to.',
        'agreement' => 'Service providers and contractors need the terms of Regulations §7051(a); third parties those of §7053. Pick the role to see its terms.',
        'terminate' => 'The vendor will then owe the deletion or return of the personal information.',
    ],

    'filters' => [
        'active' => 'Active',
    ],

    'roles' => [
        'service_provider' => 'Service provider',
        'contractor' => 'Contractor',
        'third_party' => 'Third party',
    ],

    'risks' => [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ],

    'issues' => [
        'agreement_missing' => 'No signed contract',
        'agreement_expired' => 'Contract expired',
        'agreement_incomplete' => 'Contract incomplete',
        'review_due' => 'Review due',
        'data_return_pending' => 'Data return pending',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Prohibits selling or sharing the personal information',
        'specified_purpose' => 'Identifies the specific business purpose of the processing',
        'purpose_limitation' => 'Prohibits retaining, using or disclosing it for any other purpose or outside the direct relationship',
        'no_combining' => 'Prohibits combining it with personal information from other sources, except as allowed',
        'same_protection' => 'Requires CCPA compliance and the same level of privacy protection',
        'reasonable_steps' => 'Lets us take reasonable steps to ensure its use is consistent with our obligations',
        'notify_if_unable' => 'Requires notice if it can no longer meet its obligations',
        'stop_and_remediate' => 'Lets us stop and remediate unauthorized use',
        'subcontractors' => 'Requires notice of subcontractors bound by the same terms',
        'consumer_requests' => 'Requires cooperation with consumer requests',
        'certification' => 'Contractor certifies it understands and will comply with the restrictions',
        'limited_purposes' => 'Limits the use to the specified purposes of the sale or sharing',
    ],

    'actions' => [
        'review' => 'Mark as reviewed',
        'terminate' => 'End relationship',
        'data_returned' => 'Data deleted or returned',
    ],

    'notifications' => [
        'reviewed' => 'Vendor reviewed',
    ],
];
