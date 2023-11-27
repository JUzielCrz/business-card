<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'accepted_if' => 'El campo :attribute debe aceptarse cuando :other es :value.',
    'active_url' => 'El campo :attribute debe ser una URL válida..',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute solo debe contener letras.',
    'alpha_dash' => 'El campo :attributesolo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El campo :attribute solo debe contener letras y números.',
    'array' => 'El campo :attribute de atributo debe ser una matriz.',
    'ascii' => 'El campo :attribute solo debe contener caracteres alfanuméricos y símbolos de un solo byte.',
    'before' => 'El campo :attribute  debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El campo :attribute debe tener entre :min y :max elementos.',
        'file' => 'El campo :attribute  debe estar entre :min y :max kilobytes.',
        'numeric' => 'El campo :attribute debe estar entre :min y :max.',
        'string' => 'El campo :attribute debe estar entre :min and :max caracteres.',
    ],
    'boolean' => 'El campo :attribute  debe ser verdadero o falso.',
    'confirmed' => 'La confirmacion del campo :attribute no coincide..',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El campo :attribute debe ser una fecha válida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute debe coincidir con el formato :format.',
    'decimal' => 'El campo :attribute debe tener :decimal decimales.',
    'declined' => 'El campo :attribute debe ser rechazado',
    'declined_if' => 'El campo :attribute debe rechazarse cuando  :other es :value.',
    'different' => 'El campo :attribute debe y :other deben ser diferentes.',
    'digits' => 'El campo :attribute debe de ser :digits digitos.',
    'digits_between' => 'El campo :attribute debe estar entre :min and :max digits.',
    'dimensions' => 'El campo :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El campo :attribute no debe terminar con uno de los siguientes valores: :values.',
    'doesnt_start_with' => 'El campo :attribute no debe comenzar con uno de los siguientes valores: :values.',
    'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El campo :attribute debe terminar con uno de los siguientes valores: :values.',
    'enum' => 'El :attribute seleccionado no es valido.',
    'exists' => 'El :attribute seleccionado no es valido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El campo :attribute debe ser mayor que :value.',
        'file' => 'El campo :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El campo :attribute debe ser mayor que :value caracteres.',
        'array' => 'El campo :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'El campo :attribute debe ser mayor que or equal :value.',
        'file' => 'El campo :attribute debe ser mayor que or equal :value kilobytes.',
        'string' => 'El campo :attribute debe ser mayor que or equal :value caracteres.',
        'array' => 'El campo :attribute must have :value items or more.',
    ],
    'image' => 'El campo :attribute debe ser una imagen.',
    'in' => 'El campo seleccionado :attribute es inválido.',
    'in_array' => 'El campo :attribute debe must exist in :other.',
    'integer' => 'El campo :attribute debe must be an integer.',
    'ip' => 'El campo :attribute debe must be a valid IP address.',
    'ipv4' => 'El campo :attribute debe must be a valid IPv4 address.',
    'ipv6' => 'El campo :attribute debe must be a valid IPv6 address.',
    'json' => 'El campo :attribute debe must be a valid JSON string.',
    'lowercase' => 'El campo :attribute debe must be lowercase.',
    'lt' => [
        'array' => 'El campo :attribute debe must have less than :value items.',
        'file' => 'El campo :attribute debe must be less than :value kilobytes.',
        'numeric' => 'El campo :attribute debe must be less than :value.',
        'string' => 'El campo :attribute debe must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'El campo :attribute debe must not have more than :value items.',
        'file' => 'El campo :attribute debe must be less than or equal to :value kilobytes.',
        'numeric' => 'El campo :attribute debe must be less than or equal to :value.',
        'string' => 'El campo :attribute debe must be less than or equal to :value characters.',
    ],
    'mac_address' => 'El campo :attribute debe must be a valid MAC address.',
    'max' => [
        'numeric' => 'El campo :attribute no debería ser más grande que :max.',
        'file' => 'El campo :attribute no debería pesar más de :max kilobytes.',
        'string' => 'El campo :attribute no debería tener más de :max caracteres.',
        'array' => 'El campo :attribute no debería tener más de :max elementos.',
    ],
    'max_digits' => 'El campo :attribute debe must not have more than :max digits.',
    'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El campo :attribute must be at least :min.',
        'file' => 'El campo :attribute must be at least :min kilobytes.',
        'string' => 'El campo :attribute must be at least :min caracteres.',
        'array' => 'El campo :attribute must have at least :min items.',
    ],
    'min_digits' => 'El campo :attribute debe must have at least :min digits.',
    'missing' => 'El campo :attribute debe must be missing.',
    'missing_if' => 'El campo :attribute debe must be missing when :other is :value.',
    'missing_unless' => 'El campo :attribute debe must be missing unless :other is :value.',
    'missing_with' => 'El campo :attribute debe must be missing when :values is present.',
    'missing_with_all' => 'El campo :attribute debe must be missing when :values are present.',
    'multiple_of' => 'El campo :attribute debe must be a multiple of :value.',
    'not_in' => 'El :attribute seleccionado no es valido.',
    'not_regex' => 'El campo :attribute debe format is invalid.',
    'numeric' => 'El campo :attribute debe must be a number.',
    'password' => [
        'letters' => 'El campo :attribute debe must contain at least one letter.',
        'mixed' => 'El campo :attribute debe must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'El campo :attribute debe must contain at least one number.',
        'symbols' => 'El campo :attribute debe must contain at least one symbol.',
        'uncompromised' => 'El given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'El campo :attribute debe must be present.',
    'prohibited' => 'El campo :attribute debe is prohibited.',
    'prohibited_if' => 'El campo :attribute debe is prohibited when :other is :value.',
    'prohibited_unless' => 'El campo :attribute debe is prohibited unless :other is in :values.',
    'prohibits' => 'El campo :attribute debe prohibits :other from being present.',
    'regex' => 'El campo :attribute debe format is invalid.',
    'required' => 'El campo :attribute es requrido.',
    'required_array_keys' => 'El campo :attribute debe must contain entries for: :values.',
    'required_if' => 'El campo :attribute debe is required when :other is :value.',
    'required_if_accepted' => 'El campo :attribute debe is required when :other is accepted.',
    'required_unless' => 'El campo :attribute debe is required unless :other is in :values.',
    'required_with' => 'El campo :attribute debe is required when :values is present.',
    'required_with_all' => 'El campo :attribute debe is required when :values are present.',
    'required_without' => 'El campo :attribute debe is required when :values is not present.',
    'required_without_all' => 'El campo :attribute debe is required when none of :values are present.',
    'same' => 'El campo :attribute debe must match :other.',
    'size' => [
        'array' => 'El campo :attribute debe must contain :size items.',
        'file' => 'El campo :attribute debe must be :size kilobytes.',
        'numeric' => 'El campo :attribute debe must be :size.',
        'string' => 'El campo :attribute debe must be :size characters.',
    ],
    'starts_with' => 'El campo :attribute con uno de los siguientes valores: :values',
    'string' => 'El campo :attribute debe ser una cadena.',
    'timezone' => 'El campo :attribute debe ser una zona horaria válida.',
    'unique' => 'El campo :attribute ya existe.',
    'uploaded' => 'Error al subir :attribute.',
    'uppercase' => 'El campo :attribute debe must be uppercase.',
    'url' => 'El formato de :attribute es inválido.',
    'ulid' => 'El campo :attribute debe must be a valid ULID.',
    'uuid' => 'El campo :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'title' => 'titulo',
        'name' => 'nombre',
        'password' => 'contraseña',
        'current_password' => 'contraseña actual',
        'confirm_password' => 'confirmar contraseña',
    ],

];
