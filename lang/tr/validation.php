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

    'accepted' => ': :attribute  kabul edilmesi gerekir.',
    'active_url' => ': :attribute geçerli bir URL değil.',
    'after' => ': :attribute, tarihten sonraki bir tarih olmalıdır.',
    'after_or_equal' => ': :attribute, tarih tarihinden sonra veya ona eşit olmalıdır.',
    'alpha' => ': :attribute yalnızca harf içerebilir.',
    'alpha_dash' => ': :attribute yalnızca harf, rakam, kısa çizgi ve alt çizgi içerebilir.',
    'alpha_num' => ': :attribute yalnızca harf ve rakam içerebilir.',
    'array' => ': :attribute bir dizi olmalıdır.',
    'before' => ': :attribute, tarih tarihinden önce olmalıdır.',
    'before_or_equal' => ': :attribute, tarih öncesinde veya bu tarihe eşit olmalıdır.',
    'between' => [
        'numeric' => ': :attribute min ile: max arasında olmalıdır.',
        'file' => ': :attribute min ile: maks. Kilobayt arasında olmalıdır.',
        'string' => ': :attribute min ve: max karakterleri arasında olmalıdır.',
        'array' => ': :attribute  min ve: max öğe bulunmalıdır.',
    ],
    'boolean' => ': :attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ': :attribute onayı eşleşmiyor.',
    'date' => ': :attribute geçerli bir tarih değil.',
    'date_equals' => ': :attribute,: tarihe eşit bir tarih olmalıdır.',
    'date_format' => ': :attribute format: format ile eşleşmiyor.',
    'different' => ': :attribute ve: diğer farklı olmalıdır.',
    'digits' => ': :attribute: rakamlar olmalıdır.',
    'digits_between' => ': :attribute min ve: maks rakamlar arasında olmalıdır.',
    'dimensions' => ': :attribute geçersiz resim boyutları var.',
    'distinct' => ': :attribute alanı yinelenen bir değere sahip.',
    'email' => ': :attribute , geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ': :attribute şunlardan biriyle bitmelidir:: değerler',
    'exists' => 'Seçili: :attribute geçersiz.',
    'file' => ': :attribute bir dosya olmalıdır.',
    'filled' => ': :attribute alanı bir değere sahip olmalıdır.',
    'gt' => [
        'numeric' => ': :attribute : değerinden büyük olmalıdır.',
        'file' => ': :attribute , değer kilobaytından büyük olmalıdır.',
        'string' => ': :attribute : değer karakterinden büyük olmalıdır.',
        'array' => ': :attribute , değer öğesinden daha fazla öğeye sahip olmalıdır.',
    ],
    'gte' => [
        'numeric' => ': :attribute: değerinden büyük veya eşit olmalıdır.',
        'file' => ': :attribute: değer kilobaytından büyük veya eşit olmalıdır.',
        'string' => ': :attribute: değer karakterlerinden büyük veya eşit olmalıdır.',
        'array' => ': :attribute,: değer öğelerine veya daha fazlasına sahip olmalıdır.',
    ],
    'image' => ': :attribute bir resim olmalıdır.',
    'in' => 'Seçili: :attribute geçersiz.',
    'in_array' => ': attribute alanı değil var olmak içinde:diğer',
    'integer' => ': :attribute alanı değil var olmak içinde:diğer',
    'ip' => ': :attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ': :attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ': :attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ': :attribute geçerli bir JSON dizesi olmalıdır.',
    'lt' => [
        'numeric' => ': :attribute şu değerden küçük olmalıdır: değer.',
        'file' => ': :attribute, kilobayt değerinden küçük olmalıdır.',
        'string' => ': :attribute,: değer karakterinden küçük olmalıdır.',
        'array' => ': :attribute değer öğesinden daha az olması gerekir.',
    ],
    'lte' => [
        'numeric' => ': :attribute: değerinden küçük veya eşit olmalıdır.',
        'file' => ': :attribute: değer kilobaytından küçük veya eşit olmalıdır.',
        'string' => ': :attribute: değer karakterlerinden küçük veya eşit olmalıdır.',
        'array' => ': :attribute en fazla: değer öğesi bulunmamalıdır.',
    ],
    'max' => [
        'numeric' => ': :attribute şu değerden büyük olamaz: maks.',
        'file' => ': :attribute, en fazla kilobayttan büyük olamaz.',
        'string' => ': :attribute en fazla: en fazla karakter olabilir.',
        'array' => ': :attribute en fazla: en fazla öğe olabilir.',
    ],
    'mimes' => ': :attribute,:: değerler türünde bir dosya olmalıdır.',
    'mimetypes' => ': :attribute,:: değerler türünde bir dosya olmalıdır.',
    'min' => [
        'numeric' => ': :attribute en az: min.',
        'file' => ': :attribute en az: min kilobayt olmalıdır.',
        'string' => ': :attribute en az: min karakter olmalıdır.',
        'array' => ': :attribute en az: min karakter olmalıdır.',
    ],
    'not_in' => 'Seçildi: :attribute geçersiz.',
    'not_regex' => ': :attribute biçimi geçersiz.',
    'numeric' => ': :attribute bir sayı olmalıdır.',
    'present' => ': :attribute alanı mevcut olmalıdır.',
    'regex' => ': :attribute biçimi geçersiz.',
    'required' => ': :attribute alanı gereklidir.',
    'required_if' => ': :attribute alanı şu durumlarda gereklidir: diğer: değer.',
    'required_unless' => ': :attribute alanı, şu koşulların dışında gereklidir: other, içinde: değerler.',
    'required_with' => ': :attribute alanı,: değerler mevcutsa gereklidir.',
    'required_with_all' => ': :attribute alanı şu durumlarda gereklidir: değerler mevcutsa.',
    'required_without' => ': :attribute alanı şu durumlarda gereklidir: değerler mevcut değil.',
    'required_without_all' => ': Özellik alanı,: değerlerinden hiçbiri olmadığında gereklidir.',
    'same' => ': :attribute ve :diğer eşleşmelidir.',
    'size' => [
        'numeric' => ': :attribute: boyut olmalıdır.',
        'file' => ': :attribute, boyut kilobayt olmalıdır.',
        'string' => ': :attribute: boyut karakterleri olmalıdır.',
        'array' => ': :attribute ,: size öğeleri içermelidir.',
    ],
    'starts_with' => ': :attribute şunlardan biriyle başlamalıdır:: değerler',
    'string' => ': :attribute bir dize olmalıdır.',
    'timezone' => ': :attribute geçerli bir bölge olmalıdır.',
    'unique' => ': :attribute zaten alınmış.',
    'uploaded' => ': :attribute yüklenemedi.',
    'url' => ': :attribute biçimi geçersiz.',
    'uuid' => ': :attribute geçerli bir UUID olmalıdır.',

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
            'rule-name' => 'özel mesaj',
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

    'attributes' => [],

];
