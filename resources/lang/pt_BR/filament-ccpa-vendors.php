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
        'contact' => 'Contato',
        'dpa_signed_at' => 'Contrato assinado em',
        'dpa_expires_at' => 'Contrato expira em',
        'dpa_checklist' => 'O contrato abrange',
        'notes' => 'Observações',
        'issues' => 'Pendências',
        'no_issues' => 'Nenhuma',
        'next_review' => 'Próxima revisão',
    ],

    'sections' => [
        'agreement' => 'Contrato escrito',
    ],

    'help' => [
        'business_purpose' => 'A finalidade específica à qual o contrato limita o uso das informações pessoais.',
        'agreement' => 'Prestadores de serviços e contratados precisam dos termos do Regulamento §7051(a); terceiros, dos do §7053. Escolha o papel para ver os termos.',
        'terminate' => 'O fornecedor passará então a dever a exclusão ou devolução das informações pessoais.',
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
        'agreement_expired' => 'Contrato vencido',
        'agreement_incomplete' => 'Contrato incompleto',
        'review_due' => 'Revisão pendente',
        'data_return_pending' => 'Devolução dos dados pendente',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Proíbe vender ou compartilhar as informações pessoais',
        'specified_purpose' => 'Identifica a finalidade empresarial específica do tratamento',
        'purpose_limitation' => 'Proíbe retê-las, usá-las ou divulgá-las para qualquer outra finalidade ou fora da relação direta',
        'no_combining' => 'Proíbe combiná-las com informações pessoais de outras fontes, salvo quando permitido',
        'same_protection' => 'Exige cumprimento da CCPA e o mesmo nível de proteção de privacidade',
        'reasonable_steps' => 'Permite que tomemos medidas razoáveis para garantir que o uso seja compatível com as nossas obrigações',
        'notify_if_unable' => 'Exige aviso caso não consiga mais cumprir suas obrigações',
        'stop_and_remediate' => 'Permite que interrompamos e corrijamos o uso não autorizado',
        'subcontractors' => 'Exige aviso sobre subcontratados vinculados aos mesmos termos',
        'consumer_requests' => 'Exige cooperação com as solicitações dos consumidores',
        'certification' => 'O contratado certifica que entende e cumprirá as restrições',
        'limited_purposes' => 'Limita o uso às finalidades especificadas da venda ou do compartilhamento',
    ],

    'actions' => [
        'review' => 'Marcar como revisado',
        'terminate' => 'Encerrar relação',
        'data_returned' => 'Dados eliminados ou devolvidos',
    ],

    'notifications' => [
        'reviewed' => 'Fornecedor revisado',
    ],
];
