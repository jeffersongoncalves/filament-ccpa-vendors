<?php

return [
    'resource' => [
        'label' => 'Leverancier',
        'plural_label' => 'Leveranciers',
    ],

    'fields' => [
        'name' => 'Naam',
        'role' => 'Rol',
        'risk' => 'Risico',
        'services' => 'Diensten',
        'business_purpose' => 'Zakelijk doel',
        'data_categories' => 'Verstrekte persoonsgegevens',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contract getekend op',
        'dpa_expires_at' => 'Contract verloopt op',
        'dpa_checklist' => 'Het contract omvat',
        'notes' => 'Notities',
        'issues' => 'Openstaande punten',
        'no_issues' => 'Geen',
        'next_review' => 'Volgende beoordeling',
    ],

    'sections' => [
        'agreement' => 'Schriftelijke overeenkomst',
    ],

    'help' => [
        'business_purpose' => 'Het specifieke doel waartoe de overeenkomst het gebruik van de persoonsgegevens beperkt.',
        'agreement' => 'Dienstverleners en contractanten hebben de bepalingen van Verordening §7051(a) nodig; derden die van §7053. Kies de rol om de bepalingen te zien.',
        'terminate' => 'De leverancier moet de persoonsgegevens dan verwijderen of teruggeven.',
    ],

    'filters' => [
        'active' => 'Actief',
    ],

    'roles' => [
        'service_provider' => 'Dienstverlener',
        'contractor' => 'Contractant',
        'third_party' => 'Derde',
    ],

    'risks' => [
        'low' => 'Laag',
        'medium' => 'Gemiddeld',
        'high' => 'Hoog',
    ],

    'issues' => [
        'agreement_missing' => 'Geen getekend contract',
        'agreement_expired' => 'Contract verlopen',
        'agreement_incomplete' => 'Contract onvolledig',
        'review_due' => 'Beoordeling nodig',
        'data_return_pending' => 'Teruggave van gegevens openstaand',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Verbiedt het verkopen of delen van de persoonsgegevens',
        'specified_purpose' => 'Noemt het specifieke zakelijke doel van de verwerking',
        'purpose_limitation' => 'Verbiedt ze voor een ander doel of buiten de directe relatie te bewaren, te gebruiken of te verstrekken',
        'no_combining' => 'Verbiedt ze te combineren met persoonsgegevens uit andere bronnen, behalve waar toegestaan',
        'same_protection' => 'Vereist naleving van de CCPA en hetzelfde niveau van privacybescherming',
        'reasonable_steps' => 'Laat ons redelijke stappen nemen om te zorgen dat het gebruik in overeenstemming is met onze verplichtingen',
        'notify_if_unable' => 'Vereist een melding als hij zijn verplichtingen niet meer kan nakomen',
        'stop_and_remediate' => 'Laat ons ongeoorloofd gebruik stoppen en herstellen',
        'subcontractors' => 'Vereist melding van onderaannemers die aan dezelfde voorwaarden zijn gebonden',
        'consumer_requests' => 'Vereist medewerking bij consumentenverzoeken',
        'certification' => 'De contractant verklaart dat hij de beperkingen begrijpt en naleeft',
        'limited_purposes' => 'Beperkt het gebruik tot de opgegeven doelen van de verkoop of het delen',
    ],

    'actions' => [
        'review' => 'Markeren als beoordeeld',
        'terminate' => 'Relatie beëindigen',
        'data_returned' => 'Gegevens verwijderd of teruggegeven',
    ],

    'notifications' => [
        'reviewed' => 'Leverancier beoordeeld',
    ],
];
