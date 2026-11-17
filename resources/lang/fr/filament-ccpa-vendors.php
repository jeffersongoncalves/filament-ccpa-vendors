<?php

return [
    'resource' => [
        'label' => 'Prestataire',
        'plural_label' => 'Prestataires',
    ],

    'fields' => [
        'name' => 'Nom',
        'role' => 'Rôle',
        'risk' => 'Risque',
        'services' => 'Services',
        'business_purpose' => 'Finalité professionnelle',
        'data_categories' => 'Informations personnelles communiquées',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contrat signé le',
        'dpa_expires_at' => 'Contrat expire le',
        'dpa_checklist' => 'Le contrat couvre',
        'notes' => 'Notes',
        'issues' => 'Points en suspens',
        'no_issues' => 'Aucun',
        'next_review' => 'Prochaine revue',
    ],

    'sections' => [
        'agreement' => 'Contrat écrit',
    ],

    'help' => [
        'business_purpose' => 'La finalité précise à laquelle le contrat limite l\'utilisation des informations personnelles.',
        'agreement' => 'Les prestataires de services et cocontractants doivent respecter les clauses du Règlement §7051(a) ; les tiers, celles du §7053. Choisissez le rôle pour voir ses clauses.',
        'terminate' => 'Le fournisseur devra alors supprimer ou restituer les informations personnelles.',
    ],

    'filters' => [
        'active' => 'Actifs',
    ],

    'roles' => [
        'service_provider' => 'Prestataire de services',
        'contractor' => 'Cocontractant',
        'third_party' => 'Tiers',
    ],

    'risks' => [
        'low' => 'Faible',
        'medium' => 'Moyen',
        'high' => 'Élevé',
    ],

    'issues' => [
        'agreement_missing' => 'Aucun contrat signé',
        'agreement_expired' => 'Contrat expiré',
        'agreement_incomplete' => 'Contrat incomplet',
        'review_due' => 'Revue à faire',
        'data_return_pending' => 'Restitution des données en attente',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Interdit de vendre ou de partager les informations personnelles',
        'specified_purpose' => 'Précise la finalité professionnelle du traitement',
        'purpose_limitation' => 'Interdit de les conserver, de les utiliser ou de les communiquer à toute autre fin ou en dehors de la relation directe',
        'no_combining' => 'Interdit de les combiner avec des informations personnelles d\'autres sources, sauf dans les cas autorisés',
        'same_protection' => 'Exige le respect du CCPA et le même niveau de protection de la vie privée',
        'reasonable_steps' => 'Nous permet de prendre des mesures raisonnables pour garantir que leur utilisation respecte nos obligations',
        'notify_if_unable' => 'Exige d\'être prévenu s\'il ne peut plus respecter ses obligations',
        'stop_and_remediate' => 'Nous permet de faire cesser et de corriger toute utilisation non autorisée',
        'subcontractors' => 'Exige d\'être informé des sous-traitants liés par les mêmes clauses',
        'consumer_requests' => 'Exige une coopération pour les demandes des consommateurs',
        'certification' => 'Le cocontractant certifie qu\'il comprend les restrictions et les respectera',
        'limited_purposes' => 'Limite l\'utilisation aux finalités précisées de la vente ou du partage',
    ],

    'actions' => [
        'review' => 'Marquer comme revu',
        'terminate' => 'Mettre fin à la relation',
        'data_returned' => 'Données supprimées ou restituées',
    ],

    'notifications' => [
        'reviewed' => 'Prestataire revu',
    ],
];
