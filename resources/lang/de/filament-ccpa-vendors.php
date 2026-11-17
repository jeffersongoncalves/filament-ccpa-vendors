<?php

return [
    'resource' => [
        'label' => 'Dienstleister',
        'plural_label' => 'Dienstleister',
    ],

    'fields' => [
        'name' => 'Name',
        'role' => 'Rolle',
        'risk' => 'Risiko',
        'services' => 'Leistungen',
        'business_purpose' => 'Geschäftszweck',
        'data_categories' => 'Offengelegte personenbezogene Informationen',
        'contact' => 'Kontakt',
        'dpa_signed_at' => 'Vertrag unterzeichnet am',
        'dpa_expires_at' => 'Vertrag läuft ab am',
        'dpa_checklist' => 'Der Vertrag umfasst',
        'notes' => 'Notizen',
        'issues' => 'Mängel',
        'no_issues' => 'Keine',
        'next_review' => 'Nächste Prüfung',
    ],

    'sections' => [
        'agreement' => 'Schriftlicher Vertrag',
    ],

    'help' => [
        'business_purpose' => 'Der konkrete Zweck, auf den der Vertrag die Nutzung der personenbezogenen Informationen beschränkt.',
        'agreement' => 'Dienstleister und Auftragnehmer brauchen die Klauseln von Verordnung §7051(a), Dritte die von §7053. Wählen Sie die Rolle, um ihre Klauseln zu sehen.',
        'terminate' => 'Der Anbieter schuldet dann die Löschung oder Rückgabe der personenbezogenen Informationen.',
    ],

    'filters' => [
        'active' => 'Aktiv',
    ],

    'roles' => [
        'service_provider' => 'Dienstleister',
        'contractor' => 'Auftragnehmer',
        'third_party' => 'Dritter',
    ],

    'risks' => [
        'low' => 'Niedrig',
        'medium' => 'Mittel',
        'high' => 'Hoch',
    ],

    'issues' => [
        'agreement_missing' => 'Kein unterzeichneter Vertrag',
        'agreement_expired' => 'Vertrag abgelaufen',
        'agreement_incomplete' => 'Vertrag unvollständig',
        'review_due' => 'Prüfung fällig',
        'data_return_pending' => 'Datenrückgabe ausstehend',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Verbietet den Verkauf oder das Teilen der personenbezogenen Informationen',
        'specified_purpose' => 'Nennt den konkreten Geschäftszweck der Verarbeitung',
        'purpose_limitation' => 'Verbietet, sie für andere Zwecke oder außerhalb der direkten Geschäftsbeziehung aufzubewahren, zu nutzen oder offenzulegen',
        'no_combining' => 'Verbietet, sie mit personenbezogenen Informationen aus anderen Quellen zu kombinieren, soweit nicht erlaubt',
        'same_protection' => 'Verlangt die Einhaltung des CCPA und dasselbe Datenschutzniveau',
        'reasonable_steps' => 'Erlaubt uns angemessene Schritte, um sicherzustellen, dass die Nutzung unseren Pflichten entspricht',
        'notify_if_unable' => 'Verlangt eine Mitteilung, wenn er seine Pflichten nicht mehr erfüllen kann',
        'stop_and_remediate' => 'Erlaubt uns, unbefugte Nutzung zu stoppen und zu beheben',
        'subcontractors' => 'Verlangt eine Mitteilung über Unterauftragnehmer, die an dieselben Bedingungen gebunden sind',
        'consumer_requests' => 'Verlangt Mitwirkung bei Verbraucheranfragen',
        'certification' => 'Der Auftragnehmer bestätigt, dass er die Beschränkungen versteht und einhält',
        'limited_purposes' => 'Beschränkt die Nutzung auf die festgelegten Zwecke des Verkaufs oder Teilens',
    ],

    'actions' => [
        'review' => 'Als geprüft markieren',
        'terminate' => 'Beziehung beenden',
        'data_returned' => 'Daten gelöscht oder zurückgegeben',
    ],

    'notifications' => [
        'reviewed' => 'Dienstleister geprüft',
    ],
];
