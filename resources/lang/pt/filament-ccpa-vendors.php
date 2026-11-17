<?php

return [
    'resource' => [
        'label' => 'Fornecedor',
        'plural_label' => 'Fornecedores',
    ],

    'fields' => [
        'name' => 'Nome',
        'role' => 'Papel',
        'risk' => 'Risco',
        'services' => 'Serviços',
        'business_purpose' => 'Finalidade empresarial',
        'data_categories' => 'Informações pessoais divulgadas',
        'contact' => 'Contacto',
        'dpa_signed_at' => 'Contrato assinado em',
        'dpa_expires_at' => 'Contrato expira em',
        'dpa_checklist' => 'O contrato abrange',
        'notes' => 'Notas',
        'issues' => 'Pendências',
        'no_issues' => 'Nenhuma',
        'next_review' => 'Próxima revisão',
    ],

    'sections' => [
        'agreement' => 'Contrato escrito',
    ],

    'help' => [
        'business_purpose' => 'A finalidade específica à qual o contrato limita a utilização das informações pessoais.',
        'agreement' => 'Prestadores de serviços e contratados precisam das cláusulas do Regulamento §7051(a); terceiros, das do §7053. Escolha a função para ver as cláusulas.',
        'terminate' => 'O fornecedor terá então de apagar ou devolver as informações pessoais.',
    ],

    'filters' => [
        'active' => 'Ativos',
    ],

    'roles' => [
        'service_provider' => 'Prestador de serviços',
        'contractor' => 'Contratado',
        'third_party' => 'Terceiro',
    ],

    'risks' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'issues' => [
        'agreement_missing' => 'Sem contrato assinado',
        'agreement_expired' => 'Contrato expirado',
        'agreement_incomplete' => 'Contrato incompleto',
        'review_due' => 'Revisão em falta',
        'data_return_pending' => 'Devolução dos dados pendente',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Proíbe vender ou partilhar as informações pessoais',
        'specified_purpose' => 'Identifica a finalidade empresarial específica do tratamento',
        'purpose_limitation' => 'Proíbe conservá-las, utilizá-las ou divulgá-las para qualquer outra finalidade ou fora da relação direta',
        'no_combining' => 'Proíbe combiná-las com informações pessoais de outras fontes, exceto quando permitido',
        'same_protection' => 'Exige o cumprimento da CCPA e o mesmo nível de proteção da privacidade',
        'reasonable_steps' => 'Permite-nos tomar medidas razoáveis para garantir que a utilização é compatível com as nossas obrigações',
        'notify_if_unable' => 'Exige aviso caso deixe de conseguir cumprir as suas obrigações',
        'stop_and_remediate' => 'Permite-nos interromper e corrigir a utilização não autorizada',
        'subcontractors' => 'Exige aviso sobre subcontratados vinculados às mesmas cláusulas',
        'consumer_requests' => 'Exige cooperação com os pedidos dos consumidores',
        'certification' => 'O contratado certifica que compreende as restrições e as cumprirá',
        'limited_purposes' => 'Limita a utilização às finalidades especificadas da venda ou da partilha',
    ],

    'actions' => [
        'review' => 'Marcar como revisto',
        'terminate' => 'Terminar relação',
        'data_returned' => 'Dados apagados ou devolvidos',
    ],

    'notifications' => [
        'reviewed' => 'Fornecedor revisto',
    ],
];
