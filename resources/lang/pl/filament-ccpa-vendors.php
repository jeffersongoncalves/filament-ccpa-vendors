<?php

return [
    'resource' => [
        'label' => 'Dostawca',
        'plural_label' => 'Dostawcy',
    ],

    'fields' => [
        'name' => 'Nazwa',
        'role' => 'Rola',
        'risk' => 'Ryzyko',
        'services' => 'Usługi',
        'business_purpose' => 'Cel biznesowy',
        'data_categories' => 'Ujawniane dane osobowe',
        'contact' => 'Kontakt',
        'dpa_signed_at' => 'Umowa podpisana',
        'dpa_expires_at' => 'Umowa wygasa',
        'dpa_checklist' => 'Umowa obejmuje',
        'notes' => 'Notatki',
        'issues' => 'Braki',
        'no_issues' => 'Brak',
        'next_review' => 'Następny przegląd',
    ],

    'sections' => [
        'agreement' => 'Umowa pisemna',
    ],

    'help' => [
        'business_purpose' => 'Konkretny cel, do którego umowa ogranicza wykorzystanie danych osobowych.',
        'agreement' => 'Usługodawcy i wykonawcy potrzebują postanowień Rozporządzenia §7051(a), strony trzecie — §7053. Wybierz rolę, aby zobaczyć postanowienia.',
        'terminate' => 'Dostawca będzie wtedy musiał usunąć lub zwrócić dane osobowe.',
    ],

    'filters' => [
        'active' => 'Aktywni',
    ],

    'roles' => [
        'service_provider' => 'Usługodawca',
        'contractor' => 'Wykonawca',
        'third_party' => 'Strona trzecia',
    ],

    'risks' => [
        'low' => 'Niskie',
        'medium' => 'Średnie',
        'high' => 'Wysokie',
    ],

    'issues' => [
        'agreement_missing' => 'Brak podpisanej umowy',
        'agreement_expired' => 'Umowa wygasła',
        'agreement_incomplete' => 'Umowa niekompletna',
        'review_due' => 'Wymagany przegląd',
        'data_return_pending' => 'Oczekuje na zwrot danych',
    ],

    'checklist' => [
        'no_sale_or_sharing' => 'Zakazuje sprzedawania lub udostępniania danych osobowych',
        'specified_purpose' => 'Określa konkretny cel biznesowy przetwarzania',
        'purpose_limitation' => 'Zakazuje ich przechowywania, wykorzystywania lub ujawniania w innym celu lub poza bezpośrednią relacją',
        'no_combining' => 'Zakazuje łączenia ich z danymi osobowymi z innych źródeł, chyba że jest to dozwolone',
        'same_protection' => 'Wymaga zgodności z CCPA i takiego samego poziomu ochrony prywatności',
        'reasonable_steps' => 'Pozwala nam podejmować rozsądne kroki, by wykorzystanie było zgodne z naszymi obowiązkami',
        'notify_if_unable' => 'Wymaga powiadomienia, jeśli nie może już wywiązywać się ze swoich obowiązków',
        'stop_and_remediate' => 'Pozwala nam powstrzymać i naprawić nieuprawnione wykorzystanie',
        'subcontractors' => 'Wymaga powiadamiania o podwykonawcach związanych tymi samymi warunkami',
        'consumer_requests' => 'Wymaga współpracy przy wnioskach konsumentów',
        'certification' => 'Wykonawca oświadcza, że rozumie ograniczenia i będzie ich przestrzegać',
        'limited_purposes' => 'Ogranicza wykorzystanie do określonych celów sprzedaży lub udostępnienia',
    ],

    'actions' => [
        'review' => 'Oznacz jako sprawdzony',
        'terminate' => 'Zakończ współpracę',
        'data_returned' => 'Dane usunięte lub zwrócone',
    ],

    'notifications' => [
        'reviewed' => 'Dostawca sprawdzony',
    ],
];
