<?php


function icon($name, $class = 'icon') {
    $icons = [

        'icon-house' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M3 11.5 12 4l9 7.5"/>
            <path d="M5.5 10v9.5a1 1 0 0 0 1 1H9.5v-6h5v6h3a1 1 0 0 0 1-1V10"/>
        </svg>',

        'icon-renovation' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M14.5 3.5 21 10l-2 2-6.5-6.5z"/>
            <path d="M13.4 5.6 5 14v3.5H8.5L17 9"/>
            <path d="M3 21h7"/>
        </svg>',

        'icon-blueprint' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="3.5" y="3.5" width="17" height="17" rx="1"/>
            <path d="M3.5 9h17M9 3.5v17M14.5 9v6.5h4"/>
        </svg>',

        'icon-building' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="4" y="3" width="10" height="18" rx="0.5"/>
            <rect x="14" y="9" width="6" height="12" rx="0.5"/>
            <path d="M7 7h1M10.5 7h1M7 11h1M10.5 11h1M7 15h1M10.5 15h1M16.5 12.5h1M16.5 16h1"/>
        </svg>',

        'icon-roof' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M2.5 12 12 4l9.5 8"/>
            <path d="M5 10.5V20h14v-9.5"/>
            <path d="M9.5 20v-5h5v5"/>
        </svg>',

        'icon-paint' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M19 3 11 11"/>
            <path d="M14.5 5.5 18.5 9.5"/>
            <path d="M11 11c-1.2 1.2-1 3-2.3 4.3C7.4 16.6 5.6 16.6 4.5 17.7c-1 1-1.3 2.6-.3 3.6s2.6.7 3.6-.3c1.1-1.1 1.1-2.9 2.4-4.2 1.3-1.3 3.1-1.1 4.3-2.3"/>
        </svg>',

        'icon-whatsapp' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M17.47 14.38c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.47-1.75-1.64-2.05-.17-.3-.02-.46.13-.61.15-.15.35-.4.52-.6.17-.2.22-.35.37-.57.15-.22.07-.42-.02-.6-.1-.18-.62-1.49-.85-2.05-.22-.55-.45-.47-.62-.48-.16-.01-.35-.01-.54-.01-.2 0-.5.07-.77.37-.27.3-1.03 1-1.03 2.45s1.06 2.85 1.2 3.05c.15.2 2.07 3.17 5.13 4.32 3.06 1.15 3.06.77 3.61.72.55-.05 1.76-.72 2-1.42.25-.7.25-1.3.17-1.42-.07-.13-.27-.2-.57-.35z"/>
            <path d="M12.02 2C6.5 2 2 6.48 2 11.98c0 1.95.55 3.78 1.5 5.33L2.05 22l4.83-1.4a10.05 10.05 0 0 0 5.14 1.4c5.52 0 10-4.48 10-9.98S17.54 2 12.02 2zm0 18.13c-1.67 0-3.23-.46-4.57-1.27l-.33-.2-3.05.88.9-2.97-.21-.34a8.07 8.07 0 0 1-1.27-4.35c0-4.46 3.65-8.1 8.13-8.1 4.48 0 8.12 3.64 8.12 8.1 0 4.47-3.64 8.25-8.12 8.25z"/>
        </svg>',

        'icon-phone' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M5.5 4h3.2l1.3 4.2-2 1.5a12 12 0 0 0 6.3 6.3l1.5-2 4.2 1.3v3.2c0 .7-.6 1.3-1.3 1.2C11.6 19.1 4.9 12.4 4.3 5.3 4.2 4.6 4.8 4 5.5 4z"/>
        </svg>',

        'icon-mail' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="3" y="5" width="18" height="14" rx="1.5"/>
            <path d="M3.5 6 12 12.5 20.5 6"/>
        </svg>',

        'icon-pin' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 21s7-6.5 7-12a7 7 0 1 0-14 0c0 5.5 7 12 7 12z"/>
            <circle cx="12" cy="9" r="2.4"/>
        </svg>',

        'icon-clock' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 7v5l3.5 2"/>
        </svg>',

        'icon-check-shield' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 3 4.5 5.5v6c0 5 3.5 7.7 7.5 9.5 4-1.8 7.5-4.5 7.5-9.5v-6z"/>
            <path d="M8.5 12.2l2.2 2.2 4.8-4.8"/>
        </svg>',

        'icon-chevron-down' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M6 9l6 6 6-6"/>
        </svg>',

        'icon-arrow-right' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M5 12h14M13 6l6 6-6 6"/>
        </svg>',

        'icon-menu' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M3.5 6.5h17M3.5 12h17M3.5 17.5h17"/>
        </svg>',

        'icon-close' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M5 5l14 14M19 5 5 19"/>
        </svg>',

        'icon-hardhat' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M4 16.5h16"/>
            <path d="M6 16.5v-1.8C6 10 8.7 6.5 12 6.5s6 3.5 6 8.2v1.8"/>
            <path d="M12 4.2v2.3"/>
            <rect x="2.8" y="16.5" width="18.4" height="2.4" rx="1"/>
        </svg>',

        'icon-ruler' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="m3.5 14.5 6-6 10 10-6 6z"/>
            <path d="M8 12l1.5 1.5M11 9l1.5 1.5M14 6l1.5 1.5"/>
        </svg>',

        'icon-target' => '<svg class="' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="8.5"/>
            <circle cx="12" cy="12" r="4.8"/>
            <circle cx="12" cy="12" r="1.2" fill="currentColor" stroke="none"/>
        </svg>',

    ];

    return $icons[$name] ?? '';
}
