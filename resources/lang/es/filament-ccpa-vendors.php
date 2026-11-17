<?php

return [
    'resource' => [
        'label' => 'Proveedor',
        'plural_label' => 'Proveedores',
    ],

    'fields' => [
        'name' => 'Nombre',
        'role' => 'Rol',
        'risk' => 'Riesgo',
        'services' => 'Servicios',
        'business_purpose' => 'Finalidad empresarial',
        'data_categories' => 'Información personal divulgada',
        'contact' => 'Contacto',
        'dpa_signed_at' => 'Contrato firmado el',
        'dpa_expires_at' => 'Contrato vence el',
        'dpa_checklist' => 'El contrato cubre',
        'notes' => 'Notas',
        'issues' => 'Pendientes',
        'no_issues' => 'Ninguno',
        'next_review' => 'Próxima revisión',
    ],

    'sections' => [
        'agreement' => 'Contrato por escrito',
    ],

    'help' => [
        'business_purpose' => 'La finalidad concreta a la que el contrato limita el uso de la información personal.',
        'agreement' => 'Los proveedores de servicios y contratistas necesitan las cláusulas del Reglamento §7051(a); los terceros, las del §7053. Elige el rol para ver sus cláusulas.',
        'terminate' => 'El proveedor deberá entonces eliminar o devolver la información personal.',
    ],

    'filters' => [
        'active' => 'Activos',
    ],

    'roles' => [
        'service_provider' => 'Proveedor de servicios',
        'contractor' => 'Contratista',
        'third_party' => 'Tercero',
    ],

    'risks' => [
        'low' => 'Bajo',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'issues' => [
        'agreement_missing' => 'Sin contrato firmado',
        'agreement_expired' => 'Contrato vencido',
        'agreement_incomplete' => 'Contrato incompleto',
        'review_due' => 'Revisión pendiente',
        'data_return_pending' => 'Devolución de datos pendiente',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Prohíbe vender o compartir la información personal',
        'specified_purpose' => 'Identifica la finalidad empresarial concreta del tratamiento',
        'purpose_limitation' => 'Prohíbe conservarla, usarla o divulgarla para cualquier otra finalidad o fuera de la relación directa',
        'no_combining' => 'Prohíbe combinarla con información personal de otras fuentes, salvo cuando esté permitido',
        'same_protection' => 'Exige cumplir la CCPA y el mismo nivel de protección de la privacidad',
        'reasonable_steps' => 'Nos permite tomar medidas razonables para garantizar que su uso sea coherente con nuestras obligaciones',
        'notify_if_unable' => 'Exige aviso si ya no puede cumplir sus obligaciones',
        'stop_and_remediate' => 'Nos permite detener y subsanar el uso no autorizado',
        'subcontractors' => 'Exige aviso de los subcontratistas sujetos a las mismas condiciones',
        'consumer_requests' => 'Exige cooperar con las solicitudes de los consumidores',
        'certification' => 'El contratista certifica que entiende las restricciones y las cumplirá',
        'limited_purposes' => 'Limita el uso a las finalidades especificadas de la venta o el intercambio',
    ],

    'actions' => [
        'review' => 'Marcar como revisado',
        'terminate' => 'Terminar relación',
        'data_returned' => 'Datos eliminados o devueltos',
    ],

    'notifications' => [
        'reviewed' => 'Proveedor revisado',
    ],
];
