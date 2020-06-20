<?php

return [
    'alipay' => [
        'app_id'         => '2016103000778623',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApymPqzjNJp+kcf7FZPAmG7BmMXoEVM7BQdC4M0Dut+eEynUp8UvlSlJl8P8o9pD0+UlUMH+tONg93BWy+IH3XtJQTzFUbH5CD3w63ZTrnAfbScTBZ9K/c5Vhw9Uc3FuAuTpXacC52sT3ZB2F5WedfnhHw5yu//K+G6qyWcwLj2OnLR9tVtVJm1vbz439kF+IbK8iGpP7zi/GqvmyPEPOY2glIZ1PvO4cucrL20IMDV4OH+IBV3N5RzQDGNsnLfvA4jvwHjU/j5iKYEjTqL2ARWoAhEepLa2vKkJ2l8vnO6vl51l3U5qvBrKSv/A+6Q1rO88xTGxRLB+YW/whlDWpaQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEArZOjfqi41Ol2TL4T3Uywp++VyQ5cX25r7tbvR7RGmVHXKxExaae/LT08n0evOo9DAFq5i3gVVyqnEo6q8W6Ulyswqz2wEddfVzupqofjrMvxIvM99UzCgQGDe8F2ay8fFhnHHrRArggTGmKzbzyok6niYFBmLvPmU73uijGe1CK3gsaygVT1AUtgBDKpvI05LNkHgPHWsNBRK3M1vhydfxoTThDYUix8ZYhpnFruHTZIzPB8B4D8zThcPDL1qUYxZ44H4emq/y7k0BqFNEnnDVwfsss9wCh0fAowNbJVwmM8Yh0hwX65IyQrt/QxTo3X+j6XTZh8HMDKwiy0mdAvrQIDAQABAoIBAFJPnspjbDLa+xRtVrIsueEJRjhvrPI8RMaf+hxAqvHt02FC5/G4cHodfe/yaHAWm6lBXJd8vHH3cf7k1L9ktuXwv0WVHTd4sGeHjW+mvRqmI5V1T75RRjMy6oz3Mxak49LxKnGu/LUKczSh9YEcfLx5ZTZTKgG9+01e1g2GdlEV1XoSRsjtzuiWT+B86SFxU1UHINm0Spx5NAHQiH0NL1Qa2rT8l2rnTXjRegnzs3AqqkY2XuL0ywfJ2X977lfQCnr2j0vuX3K5qm9aVCMkYK7ZtYdM7M3e7ae6pV00DM5rwk3PzXw8VgPEYVKQj35bcIdQKeLRXgkrBUqWG5naXmkCgYEA2O0geM3W9hbhUxBm3zE8YSaUSFe/y2Ji8C0u5QDIJuok3LxyzuizfdlUT2aSUH2N8uo4ImOeZYXOha0fmodbag7zh8ui9iQ41lrxvGynvpZ6Hxg2kT95PHyFQhivwtwm1Nb53VQ3+LqgcOnqV43cyIj0H+w0sWQIFI/EQutcVwcCgYEAzNeVP9pNNzCeiPvL2ABIQRBpxC3IUtVGJhJHdaVxwIasPXkXog3VpRKc0yjWMiTavo75WaVN+RWWNdZh+X07qrzgVZhDnUVg3mSDe0mMabXg9hnksMNX24D9w0wAKx8aFO0xtHRQAh/5Ky/yzVK/maR0nXpv/hoHW6fDFhDsAqsCgYEAllpE13ZUN91D776+jpQhtXR38mxfkyhuSuoGRtNz5wUC57v2F1NSlTe9KAt//ioH6QZOQgeqEdPcgOqtrP2Ebs5OHSEXomMYwfnm8yKcYY0Kt+Kgb6v+692iv1089WKBx6P5K17kLJGuApUex/CbxqKmEjo1i34524aKEZfwOKECgYBCnz8whEymzY5SWSqkNvtJBhCQOJ+1qR3mlf1d2xBTILn2SGMSVtOMm7Ab0WVQ68GlRpT8vhHNGGNBYVd+MGfukP2ZeStMhFsMGb7Vo0civn/LKwLBJtd1Uc+27AoF/FicQ8TtvwKinkmI7VBXzTj5vI4dBcxU5ZxNCBQgIiLQfwKBgQC2X6Fw+42t3VHwOCGb69uqDl8bmB4gdTfnxl4H4ejL+tXC16MjIR+sPvPX0ZjtXaQEnSx/Y3EXByCBCL2kv36rQG0GkP7MoJg9xMPQFJdrwCH4JCOdCaKBcB8WWh1MEcQ5rN2D++fHo0LyqbMvRMkxkDXihQE2ecR2dsbcwQ0Dbw==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
