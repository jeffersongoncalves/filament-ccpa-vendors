<?php

return [
    'resource' => [
        'label' => 'Fornitore',
        'plural_label' => 'Fornitori',
    ],

    'fields' => [
        'name' => 'Nome',
        'role' => 'Ruolo',
        'risk' => 'Rischio',
        'services' => 'Servizi',
        'business_purpose' => 'Finalità aziendale',
        'data_categories' => 'Informazioni personali comunicate',
        'contact' => 'Contatto',
        'dpa_signed_at' => 'Contratto firmato il',
        'dpa_expires_at' => 'Contratto scade il',
        'dpa_checklist' => 'Il contratto copre',
        'notes' => 'Note',
        'issues' => 'Criticità',
        'no_issues' => 'Nessuna',
        'next_review' => 'Prossima revisione',
    ],

    'sections' => [
        'agreement' => 'Contratto scritto',
    ],

    'help' => [
        'business_purpose' => 'La finalità specifica a cui il contratto limita l\'uso delle informazioni personali.',
        'agreement' => 'Fornitori di servizi e appaltatori richiedono le clausole del Regolamento §7051(a); le terze parti quelle del §7053. Scegli il ruolo per vederne le clausole.',
        'terminate' => 'Il fornitore dovrà quindi cancellare o restituire le informazioni personali.',
    ],

    'filters' => [
        'active' => 'Attivi',
    ],

    'roles' => [
        'service_provider' => 'Fornitore di servizi',
        'contractor' => 'Appaltatore',
        'third_party' => 'Terza parte',
    ],

    'risks' => [
        'low' => 'Basso',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'issues' => [
        'agreement_missing' => 'Nessun contratto firmato',
        'agreement_expired' => 'Contratto scaduto',
        'agreement_incomplete' => 'Contratto incompleto',
        'review_due' => 'Revisione da fare',
        'data_return_pending' => 'Restituzione dei dati in sospeso',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Vieta di vendere o condividere le informazioni personali',
        'specified_purpose' => 'Indica la finalità aziendale specifica del trattamento',
        'purpose_limitation' => 'Vieta di conservarle, usarle o comunicarle per qualsiasi altra finalità o al di fuori del rapporto diretto',
        'no_combining' => 'Vieta di combinarle con informazioni personali provenienti da altre fonti, salvo quanto consentito',
        'same_protection' => 'Richiede il rispetto del CCPA e lo stesso livello di tutela della privacy',
        'reasonable_steps' => 'Ci consente di adottare misure ragionevoli per garantire che l\'uso sia coerente con i nostri obblighi',
        'notify_if_unable' => 'Richiede un avviso se non è più in grado di rispettare i propri obblighi',
        'stop_and_remediate' => 'Ci consente di interrompere e porre rimedio all\'uso non autorizzato',
        'subcontractors' => 'Richiede di comunicare i subappaltatori vincolati alle stesse condizioni',
        'consumer_requests' => 'Richiede collaborazione per le richieste dei consumatori',
        'certification' => 'L\'appaltatore certifica di comprendere le restrizioni e di rispettarle',
        'limited_purposes' => 'Limita l\'uso alle finalità specificate della vendita o della condivisione',
    ],

    'actions' => [
        'review' => 'Segna come revisionato',
        'terminate' => 'Chiudi il rapporto',
        'data_returned' => 'Dati cancellati o restituiti',
    ],

    'notifications' => [
        'reviewed' => 'Fornitore revisionato',
    ],
];
