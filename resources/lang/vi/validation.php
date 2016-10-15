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

    'accepted'             => 'Các: thuộc tính phải được chấp nhận.',
    'active_url'           => 'Các: thuộc tính không phải là một URL hợp lệ.',
    'after'                => 'Các: thuộc tính phải là một ngày sau: ngày.',
    'alpha'                => 'Các: thuộc tính chỉ có thể chứa các chữ cái.',
    'alpha_dash'           => 'Các: thuộc tính chỉ có thể chứa các chữ cái, số và dấu gạch ngang.',
    'alpha_num'            => 'Các: thuộc tính chỉ có thể chứa các chữ cái và số.',
    'array'                => 'Các: thuộc tính phải là một mảng.',
    'before'               => 'Các: thuộc tính phải là một ngày trước: ngày.',
    'between'              => [
        'numeric' => 'Các: thuộc tính phải là giữa: min và: max.',
        'file'    => 'Các: thuộc tính phải là giữa: min và: kilobyte max.',
        'string'  => 'Các: thuộc tính phải là giữa: min và: ký tự tối đa.',
        'array'   => 'Các: thuộc tính phải có từ: min và: Các sản phẩm tối đa.',
    ],
    'boolean'              => 'Các: trường thuộc tính phải là đúng hay sai.',
    'confirmed'            => 'Các: xác nhận thuộc tính không phù hợp.',
    'date'                 => 'Các: thuộc tính không phải là một ngày hợp lệ.',
    'date_format'          => 'Các: thuộc tính không phù hợp với các định dạng: định dạng.',
    'different'            => 'Các: thuộc tính và: khác phải khác.',
    'digits'               => 'Các: thuộc tính phải: chữ số chữ số.',
    'digits_between'       => 'Các: thuộc tính phải là giữa: min và: max chữ số.',
    'distinct'             => 'Các: trường thuộc tính có giá trị trùng lặp.',
    'email'                => 'Các: thuộc tính phải là một địa chỉ email hợp lệ.',
    'exists'               => 'Các lựa chọn: thuộc tính là không hợp lệ.',
    'filled'               => 'Các: trường thuộc tính là bắt buộc.',
    'image'                => 'Các: thuộc tính phải là một hình ảnh.',
    'in'                   => 'Các lựa chọn: thuộc tính là không hợp lệ.',
    'in_array'             => 'Các: trường thuộc tính không tồn tại trong: khác.',
    'integer'              => 'Các: thuộc tính phải là một số nguyên.',
    'ip'                   => 'Các: thuộc tính phải là một địa chỉ IP hợp lệ.',
    'json'                 => 'Các: thuộc tính phải là một chuỗi JSON hợp lệ.',
    'max'                  => [
        'numeric' => 'Các: thuộc tính có thể không lớn hơn: max.',
        'file'    => 'Các: thuộc tính có thể không lớn hơn: kilobyte max.',
        'string'  => 'Các: thuộc tính có thể không lớn hơn: ký tự tối đa.',
        'array'   => 'Các: thuộc tính có thể không có nhiều hơn: các mặt hàng tối đa.',
    ],
    'mimes'                => 'Các: thuộc tính phải là một tập tin loại:: giá trị.',
    'min'                  => [
        'numeric' => 'Các: thuộc tính phải là nhỏ nhất: min.',
        'file'    => 'Các: thuộc tính phải có ít nhất: min kilobyte.',
        'string'  => 'Các: thuộc tính phải có ít nhất: nan ký tự.',
        'array'   => 'Các: thuộc tính phải có ít nhất: min items.',
    ],
    'not_in'               => 'Các lựa chọn: thuộc tính là không hợp lệ.',
    'numeric'              => 'Các: thuộc tính phải là một số.',
    'present'              => 'Các: trường thuộc tính phải có mặt.',
    'regex'                => 'Các: định dạng thuộc tính là không hợp lệ.',
    'required'             => 'Các: trường thuộc tính được yêu cầu.',
    'required_if'          => 'Các: trường thuộc tính được yêu cầu khi: khác là: giá trị.',
    'required_unless'      => 'Các: trường thuộc tính được yêu cầu, trừ khi: khác là: giá trị',
    'required_with'        => 'Các: trường thuộc tính được yêu cầu khi: giá trị là hiện tại..',
    'required_with_all'    => 'Các: trường thuộc tính được yêu cầu khi: giá trị là hiện tại.',
    'required_without'     => 'Các: trường thuộc tính được yêu cầu khi: giá trị không phải là hiện tại.',
    'required_without_all' => 'Các: trường thuộc tính được yêu cầu khi không ai trong số: giá trị hiện tại.',
    'same'                 => 'Các: thuộc tính và: khác phải phù hợp.',
    'size'                 => [
        'numeric' => 'Các: thuộc tính phải: kích thước.',
        'file'    => 'Các: thuộc tính phải là: kilobyte kích thước.',
        'string'  => 'Các: thuộc tính phải là: nhân vật kích thước.',
        'array'   => 'Các: thuộc tính phải bao gồm: mục kích thước.',
    ],
    'string'               => 'Các: thuộc tính phải là một chuỗi.',
    'timezone'             => 'Các: thuộc tính phải là một khu vực có giá trị.',
    'unique'               => 'Các: thuộc tính đã được thực hiện.',
    'url'                  => 'Các: định dạng thuộc tính là không hợp lệ.',

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
            'rule-name' => 'tùy chỉnh thông điệp',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
