<?php
class PrimeBankPlcGateway
{
    public function info()
    {
        return [
            'title' => 'Prime Bank PLC',
            'logo' => 'assets/logo.png',
            'currency' => 'BDT',
            'tab' => 'global',

            'gateway_type' => 'manual',
            'verify_by' => 'slip',
        ];
    }

    public function color()
    {
        return [
            'primary_color' => '#02529B',
            'text_color' => '#FFFFFF',
            'btn_color' => '#02529B',
            'btn_text_color' => '#FFFFFF',
        ];
    }

    public function fields()
    {
        return [
            [
                'name' => 'account_name',
                'label' => 'Account Name',
                'type' => 'text',
            ],
            [
                'name' => 'account_number',
                'label' => 'Account Number',
                'type' => 'text',
            ],
            [
                'name' => 'branch_name',
                'label' => 'Branch Name',
                'type' => 'text',
            ],
            [
                'name' => 'routing_number',
                'label' => 'Routing Number',
                'type' => 'text',
            ],
            [
                'name' => 'swift_code',
                'label' => 'Swift Code',
                'type' => 'text',
            ]
        ];
    }

    public function supported_languages()
    {
        return [
            'en' => 'English',
            'bn' => 'বাংলা',
            'hi' => 'हिन्दी',
            'ur' => 'اردو',
            'ar' => 'العربية',
        ];
    }

    public function lang_text()
    {
        return [
            '1' => [
                'en' => 'Bank Name: Prime Bank PLC',
                'bn' => 'ব্যাংকের নাম: Prime Bank PLC',
                'hi' => 'बैंक का नाम: Prime Bank PLC',
                'ur' => 'بینک کا نام: Prime Bank PLC',
                'ar' => 'اسم البنك: Prime Bank PLC',
            ],

            '2' => [
                'en' => 'Account Name: {account_name}',
                'bn' => 'অ্যাকাউন্টের নাম: {account_name}',
                'hi' => 'खाता नाम: {account_name}',
                'ur' => 'اکاؤنٹ کا نام: {account_name}',
                'ar' => 'اسم الحساب: {account_name}',
            ],

            '3' => [
                'en' => 'Account Number: {account_number}',
                'bn' => 'অ্যাকাউন্ট নম্বর: {account_number}',
                'hi' => 'खाता संख्या: {account_number}',
                'ur' => 'اکاؤنٹ نمبر: {account_number}',
                'ar' => 'رقم الحساب: {account_number}',
            ],

            '4' => [
                'en' => 'Branch Name: {branch_name}',
                'bn' => 'শাখার নাম: {branch_name}',
                'hi' => 'शाखा का नाम: {branch_name}',
                'ur' => 'برانچ کا نام: {branch_name}',
                'ar' => 'اسم الفرع: {branch_name}',
            ],

            '5' => [
                'en' => 'Routing Number: {routing_number}',
                'bn' => 'রাউটিং নম্বর: {routing_number}',
                'hi' => 'रूटिंग नंबर: {routing_number}',
                'ur' => 'راؤٹنگ نمبر: {routing_number}',
                'ar' => 'رقم التوجيه: {routing_number}',
            ],

            '6' => [
                'en' => 'Swift Code: {swift_code}',
                'bn' => 'সুইফট কোড: {swift_code}',
                'hi' => 'स्विफ्ट कोड: {swift_code}',
                'ur' => 'سوئفٹ کوڈ: {swift_code}',
                'ar' => 'رمز السويفت: {swift_code}',
            ],

            '7' => [
                'en' => 'Enter the Amount: {amount} {currency}',
                'bn' => 'পরিমাণ লিখুন: {amount} {currency}',
                'hi' => 'राशि दर्ज करें: {amount} {currency}',
                'ur' => 'رقم درج کریں: {amount} {currency}',
                'ar' => 'أدخل المبلغ: {amount} {currency}',
            ]
        ];
    }

    public function instructions($data)
    {
        return [
            [
                'icon' => '',
                'text' => '1',
                'copy' => false,
            ],
            [
                'icon' => '',
                'text' => '2',
                'copy' => true,
                'value' => $data['options']['account_name'] ?? '',
                'vars' => [
                    '{account_name}' => $data['options']['account_name'] ?? ''
                ]
            ],
            [
                'icon' => '',
                'text' => '3',
                'copy' => true,
                'value' => $data['options']['account_number'] ?? '',
                'vars' => [
                    '{account_number}' => $data['options']['account_number'] ?? ''
                ]
            ],
            [
                'icon' => '',
                'text' => '4',
                'copy' => true,
                'value' => $data['options']['branch_name'] ?? '',
                'vars' => [
                    '{branch_name}' => $data['options']['branch_name'] ?? ''
                ]
            ],
            [
                'icon' => '',
                'text' => '5',
                'copy' => true,
                'value' => $data['options']['routing_number'] ?? '',
                'vars' => [
                    '{routing_number}' => $data['options']['routing_number'] ?? ''
                ]
            ],
            [
                'icon' => '',
                'text' => '6',
                'copy' => true,
                'value' => $data['options']['swift_code'] ?? '',
                'vars' => [
                    '{swift_code}' => $data['options']['swift_code'] ?? ''
                ]
            ],
            [
                'icon' => '',
                'text' => '7',
                'copy' => true,
                'value' => $data['transaction']['local_net_amount'] ?? '',
                'vars' => [
                    '{amount}' => $data['transaction']['local_net_amount'] ?? '',
                    '{currency}' => $data['transaction']['local_currency'] ?? ''
                ]
            ]
        ];
    }
}
