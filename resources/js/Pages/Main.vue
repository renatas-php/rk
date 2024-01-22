<template>    
    <section class="min-h-[500px] md:min-h-[60vh] flex items-center justify center mt-[70px] gradient-bg overflow-hidden py-[64px] px-[32px] xl:px-[105px] relative">
        <svg xmlns="http://www.w3.org/2000/svg" class="filter-svg">
            <defs>
                <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -8" result="goo" />
                <feBlend in="SourceGraphic" in2="goo" />
                </filter>
            </defs>
        </svg>
        <div class="flex flex-col gap-[16px] items-center justify-center w-full m-auto overflow-hidden gradients-container relative h-[70vh]">
            <div class="g1"></div>
            <div class="g2"></div>
            <div class="g3"></div>
            <div class="g4"></div>
            <div class="g5"></div>
            <div class="interactive"></div>
        </div>
        <transition appear>
            <h1 id="heroTitleFirst" class="absolute left-2/4 -translate-x-2/4 text-[50px] md:text-[90px] lg:text-[130px] flex flex-col items-center gap-[32px] leading-[50px] md:leading-[120px] font-medium" style="font-family: 'Bungee Shade';">
                <span class="inline-block">Individualūs</span>
                <span>sprendimai</span>
            </h1>
        </transition>
        <transition appear>
            <h1 id="heroTitleSecond" class="absolute left-2/4 -translate-x-2/4 text-[50px] md:text-[90px] lg:text-[130px] flex flex-col items-center gap-[32px] leading-[50px] md:leading-[120px] font-medium" style="font-family: 'Bungee Shade';">
                <span class="inline-block">Elektroninės</span>
                <span>parduotuvės</span>
            </h1>
        </transition>
        <transition appear>
            <h1 id="heroTitleThird" class="absolute left-2/4 -translate-x-2/4 text-[50px] md:text-[90px] lg:text-[130px] flex flex-col items-center gap-[32px] leading-[50px] md:leading-[120px] font-medium" style="font-family: 'Bungee Shade';">
                <span class="inline-block">Reprezentacinės</span>
                <span>svetainės</span>
            </h1>
        </transition>
    </section>
    <section class="flex flex-col justify center mx-auto px-[32px] xl:px-[105px] gap-[64px]" id="services">
        <div class="flex flex-col gap-[4px]">
            <span class="border-t border-[#000]"></span>
            <span class="text-[#161617] text-[16px]">PASLAUGOS</span>
        </div>
        <div class="flex flex-col xl:flex-row gap-[32px]">
            <div class="flex flex-col gap-[4px]">
                <div class="flex flex-wrap gap-[8px] p-[32px] lg:p-[64px]">
                    <div class="hidden lg:block h-[30px] w-[30px] m-[2px] group" v-for="customBubble in customBubbles">
                        <span class="h-[25px] w-[25px] rounded-full bg-[#000] block group-hover:-mt-[8px] transition-all duration-300 custom-bubble"></span>
                    </div>
                    <div class="block lg:hidden h-[15px] w-[15px] m-[4px] lg:m-[8px] group" v-for="customBubble in customBubbles">
                        <span class="h-[15px] w-[15px] rounded-full bg-[#000] block group-hover:-mt-[8px] transition-all duration-300 custom-bubble"></span>
                    </div>
                </div>
                <!--<img :src="`/assets/images/service.webp`" class="mb-[16px]">-->
                <h2 class="text-[20px] font-medium">Individualūs sprendimai</h2>
                <p class="text-[18px] text-[#4b4b4b]">Programuojame įvairaus pobūdžio internetinius sprendimus. Savitarnos portalai, sistemų integracijos, crm, erp, marketplace, API servisai, nestandartinės el. parduotuvės.</p>
            </div>
            <div class="flex flex-col gap-[4px]">
                <div class="flex flex-wrap gap-[8px] p-[32px] lg:p-[64px]">
                    <div class="h-[30px] w-[30px] m-[8px] group" v-for="customBubble in customBubbles">
                        <span class="h-[25px] w-[25px] rounded-full bg-[#000] block group-hover:-mt-[8px] transition-all duration-300 eshop-bubble"></span>
                    </div>
                </div>
                <h2 class="text-[20px] font-medium">El. parduotuvės</h2>
                <p class="text-[18px] text-[#4b4b4b]">Kuriu modernias ir funkcionalias elektroninės parduotuves. Priklausomai nuo poreikių tai gali būti woocommerce arba individualus sprendimas.</p>
            </div>
            <div class="flex flex-col gap-[4px]">
                <div class="flex flex-wrap gap-[8px] p-[32px] lg:p-[64px]">
                    <div class="h-[30px] w-[30px] m-[8px] group" v-for="customBubble in customBubbles">
                        <span class="h-[25px] w-[25px] rounded-full bg-[#000] block group-hover:-mt-[8px] transition-all duration-800 web-bubble"></span>
                    </div>
                </div>
                <h2 class="text-[20px] font-medium">Reprezentacinės svetainės</h2>
                <p class="text-[18px] text-[#4b4b4b]">Šiuolaikiškos svetainės Jūsų verslo įvaizdžiui. Pagal poreikį tai gali būti wordpress arba laravel/vue.js sprendimas.</p>
            </div>
        </div>
    </section>
    <!--<section class="min-h-screen flex flex-col justify center max-w-[1200px] mx-auto py-[64px] gap-[64px] px-[26px]" id="services">
        <h2 class="text-[46px] md:text-[70px] font-bold" style="font-family: 'Montserrat', sans-serif;">Paslaugos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-[60px] md:gap-y-[100px] gap-x-[32px]">
            <div class="flex flex-col gap-[16px]" id="serviceCustom">
                <div class="w-[80px] h-[80px]">
                    <svg width="80" height="80" viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg" class="rocket">
                        <g id="individualus-sprendimai 1">
                        <path id="Vector" d="M392.188 235.313C392.188 237.385 393.011 239.372 394.476 240.837C395.941 242.302 397.928 243.125 400 243.125C402.072 243.125 404.059 242.302 405.524 240.837C406.989 239.372 407.812 237.385 407.812 235.313C407.812 233.241 406.989 231.253 405.524 229.788C404.059 228.323 402.072 227.5 400 227.5C397.928 227.5 395.941 228.323 394.476 229.788C393.011 231.253 392.188 233.241 392.188 235.313Z" fill="#00008B"/>
                        <path id="Vector_2" d="M312.734 581.641C314.375 581.094 315.938 580.547 317.578 580.078C316.016 580.547 314.375 581.094 312.734 581.641ZM312.734 581.641C314.375 581.094 315.938 580.547 317.578 580.078C316.016 580.547 314.375 581.094 312.734 581.641Z" fill="#39393A"/>
                        <path id="Vector_3" d="M399.844 200.469C418.906 200.469 434.375 215.937 434.375 235C434.375 254.062 418.906 269.531 399.844 269.531C380.781 269.531 365.312 254.062 365.312 235C365.312 215.937 380.859 200.469 399.844 200.469ZM399.844 184.844C372.109 184.844 349.688 207.266 349.688 235C349.688 262.734 372.109 285.156 399.844 285.156C427.578 285.156 450 262.734 450 235C450 207.266 427.578 184.844 399.844 184.844Z" fill="#00008B"/>
                        <path id="Vector_4" d="M570.859 413.672C571.172 406.875 571.328 400.078 571.328 393.203C571.328 252.891 504.063 128.281 400 49.8438C296.016 128.281 228.75 252.891 228.75 393.203C228.75 400.078 228.906 406.875 229.219 413.594C185.469 457.344 158.438 517.734 158.438 584.453C158.438 632.656 172.5 677.5 196.797 715.156C220.469 676.25 255.156 644.766 296.563 625.078C327.031 610.547 361.172 602.422 397.187 602.422C434.922 602.422 470.547 611.328 502.109 627.188C543.125 647.734 577.344 680.078 600.234 719.688C626.328 681.094 641.563 634.609 641.563 584.453C641.563 517.734 614.531 457.422 570.859 413.672ZM274.297 299.531C281.484 269.922 292.188 241.172 306.016 213.984C319.652 187.189 336.324 162.05 355.703 139.062C369.297 122.969 384.141 107.891 400.078 94.1406C416.016 107.891 430.859 122.969 444.453 139.062C463.828 162.109 480.547 187.344 494.141 213.984C507.969 241.172 518.672 269.922 525.859 299.531C532.656 327.5 536.406 356.328 536.953 385.391C497.969 358.594 450.781 342.891 400 342.891C349.219 342.891 302.109 358.594 263.203 385.391C263.75 356.328 267.5 327.5 274.297 299.531ZM203.516 650.469C196.406 629.375 192.812 607.109 192.812 584.531C192.812 556.563 198.281 529.375 209.063 503.906C215.625 488.438 223.906 473.906 233.984 460.547C241.562 508.594 257.031 554.062 279.141 595.391C250.703 609.297 225.234 627.891 203.516 650.469ZM488.047 583.828C487.5 583.594 486.875 583.438 486.328 583.203C486.016 583.047 485.625 582.969 485.313 582.813C484.844 582.656 484.297 582.422 483.828 582.266C483.203 582.031 482.656 581.875 482.031 581.641C481.406 581.406 480.859 581.25 480.234 581.094L479.531 580.859C478.75 580.625 477.891 580.313 477.109 580.078C476.172 579.766 475.234 579.531 474.375 579.219L472.031 578.516C471.875 578.438 471.719 578.438 471.484 578.359C470.625 578.125 469.687 577.813 468.828 577.578C467.891 577.344 466.953 577.109 466.094 576.875L463.281 576.172L460.469 575.469C459.688 575.234 458.828 575.078 458.047 574.922C457.109 574.688 456.172 574.531 455.234 574.297C454.219 574.062 453.281 573.828 452.266 573.672H452.031C451.328 573.516 450.547 573.359 449.844 573.203C449.531 573.125 449.297 573.125 448.984 573.047C448.125 572.891 447.266 572.734 446.328 572.578C445.391 572.422 444.453 572.266 443.516 572.031L439.297 571.328C438.594 571.25 437.813 571.094 437.109 571.016C436.484 570.938 435.859 570.781 435.156 570.703C433.125 570.391 431.172 570.156 429.141 569.922C428.203 569.844 427.344 569.687 426.406 569.609H426.094C425.391 569.531 424.687 569.453 423.906 569.375C423.047 569.297 422.266 569.219 421.406 569.141C420.078 568.984 418.75 568.906 417.422 568.828C416.797 568.75 416.25 568.75 415.625 568.672C414.922 568.594 414.141 568.594 413.438 568.516C413.125 568.516 412.813 568.516 412.5 568.437C411.641 568.359 410.859 568.359 410 568.281C409.609 568.281 409.219 568.203 408.828 568.203C407.813 568.125 406.797 568.125 405.781 568.125C405.156 568.125 404.609 568.047 403.984 568.047C403.047 568.047 402.109 568.047 401.25 567.969H390.391C388.594 567.969 386.797 568.047 385 568.125C384.297 568.125 383.516 568.203 382.813 568.203C382.188 568.203 381.641 568.281 381.016 568.281C379.922 568.359 378.828 568.438 377.812 568.516C376.719 568.594 375.703 568.672 374.609 568.75C373.516 568.828 372.5 568.906 371.406 569.063C370.937 569.063 370.469 569.141 370 569.219L363.906 569.922C363.047 570 362.266 570.156 361.406 570.234C360.625 570.313 359.766 570.469 358.984 570.547C356.484 570.938 353.984 571.25 351.562 571.719C351.016 571.797 350.469 571.875 349.922 572.031C349.219 572.109 348.594 572.266 347.891 572.422C347.031 572.578 346.094 572.734 345.234 572.891C344.531 573.047 343.906 573.125 343.203 573.281C342.891 573.359 342.578 573.359 342.344 573.438C341.797 573.516 341.25 573.672 340.703 573.75C339.766 573.984 338.828 574.141 337.891 574.375C336.953 574.609 336.016 574.766 335.078 575C334.922 575 334.766 575.078 334.609 575.078C334.219 575.156 333.828 575.234 333.437 575.391C332.578 575.625 331.641 575.859 330.703 576.094C329.687 576.328 328.75 576.563 327.734 576.875C327.422 576.953 327.031 577.031 326.641 577.188C325.625 577.5 324.531 577.734 323.516 578.047C322.344 578.359 321.172 578.75 319.922 579.063C319.141 579.297 318.281 579.531 317.5 579.844C315.859 580.313 314.297 580.859 312.656 581.406C312.109 581.563 311.563 581.797 311.016 581.953C299.297 560.469 289.609 537.891 282.109 514.609C272.969 486.406 267.109 457.109 264.531 427.422C264.063 422.187 263.75 417.031 263.516 411.797C263.437 410.859 263.438 409.922 263.438 408.984C263.359 408.047 263.359 407.109 263.359 406.172C263.359 405.234 263.281 404.297 263.281 403.359C263.281 402.422 263.203 401.484 263.203 400.469C277.891 389.531 293.828 380.313 310.859 373.125C339.062 361.172 369.063 355.156 400 355.156C430.938 355.156 460.937 361.25 489.141 373.125C506.172 380.313 522.109 389.453 536.797 400.469V400.547C536.797 401.328 536.797 402.031 536.719 402.812C536.719 403.906 536.641 405 536.641 406.172C536.641 406.719 536.641 407.188 536.562 407.734C536.484 409.141 536.484 410.469 536.406 411.875C536.172 417.109 535.781 422.266 535.391 427.5C532.813 457.578 526.797 487.266 517.422 515.781C509.844 539.453 500 562.187 488.047 583.828ZM594.922 654.844C573.438 631.466 547.962 612.101 519.688 597.656C542.422 555.703 558.359 509.531 566.094 460.547C576.094 473.906 584.375 488.359 590.938 503.906C601.719 529.453 607.188 556.563 607.188 584.531C607.188 608.75 603.047 632.422 594.922 654.844Z" fill="#00008B"/>
                        <g id="flame">
                        <path id="Vector_5" d="M400 640.078C406.797 640.078 419.297 657.969 419.297 687.266C419.297 716.563 406.797 734.453 400 734.453C393.203 734.453 380.703 716.563 380.703 687.266C380.703 657.969 393.203 640.078 400 640.078ZM400 624.453C380.703 624.453 365.078 652.578 365.078 687.266C365.078 721.953 380.703 750.078 400 750.078C419.297 750.078 434.922 721.953 434.922 687.266C434.922 652.578 419.297 624.453 400 624.453Z" fill="#00008B"/>
                        </g>
                        </g>
                    </svg>
                </div>
                <p class="text-[18px] font-bold border-b border-[#1e2125] pb-[16px]" style="font-family: 'Montserrat', sans-serif;">Individualūs sprendimai</p>
                <p class="text-[16px] leading-[30px]" style="font-family: 'Albert Sans', sans-serif;">Programuoju įvairaus pobūdžio internetinius sprendimus. Sistemų integracijos, crm, erp, marketplace, API servisai, nestandartinės el. parduotuvės.</p>
            </div>
            <div class="flex flex-col gap-[16px]" id="eshop">
                <div class="w-[80px] h-[80px]">
                    <svg width="80" height="80" viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg" class="cart">
                        <path d="M750.078 201.875H192.031L163.828 69.8438H49.9219V104.219H136.016L156.875 201.875L235.234 568.984L649.297 569.297V534.922L263.047 534.688L245.391 451.953H650L750.078 201.875ZM699.297 236.25L668.437 313.281H215.859L199.375 236.25H699.297ZM238.125 417.578L218.516 325.781H663.437L626.719 417.578H238.125Z" fill="#00008B"/>
                        <path d="M293.438 633.281C315.859 633.281 334.062 651.484 334.062 673.906C334.062 696.328 315.859 714.531 293.438 714.531C271.016 714.531 252.812 696.328 252.812 673.906C252.812 651.484 271.016 633.281 293.438 633.281ZM293.438 617.656C262.422 617.656 237.188 642.812 237.188 673.906C237.188 705 262.344 730.156 293.438 730.156C324.531 730.156 349.688 705 349.688 673.906C349.688 642.812 324.453 617.656 293.438 617.656ZM571.875 633.281C594.297 633.281 612.5 651.484 612.5 673.906C612.5 696.328 594.297 714.531 571.875 714.531C549.453 714.531 531.25 696.328 531.25 673.906C531.25 651.484 549.453 633.281 571.875 633.281ZM571.875 617.656C540.859 617.656 515.625 642.812 515.625 673.906C515.625 705 540.781 730.156 571.875 730.156C602.891 730.156 628.125 705 628.125 673.906C628.125 642.812 602.891 617.656 571.875 617.656ZM349.609 236.25H362.109V417.578H349.609V236.25ZM509.375 236.25H521.875V417.578H509.375V236.25Z" fill="#00008B"/>
                    </svg>
                </div>
                <p class="text-[18px] font-bold border-b border-[#1e2125] pb-[16px]" style="font-family: 'Montserrat', sans-serif;">El. parduotuvės</p>
                <p class="text-[16px] leading-[30px]" style="font-family: 'Albert Sans', sans-serif;">Kuriu modernias ir funkcionalias elektroninės parduotuves. Priklausomai nuo poreikių tai gali būti woocommerce arba individualus sprendimas.</p>
            </div>
            <div class="flex flex-col gap-[16px]" id="simpleWeb">
                <div class="w-[80px] h-[80px]">
                    <svg width="80" height="80" viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg" class="sun">
                        <g id="reprezentacines-svetaines 1">
                        <path id="Vector" d="M49.9219 124.219V675.781H750.078V124.219H49.9219ZM715.703 641.406H84.2969V632.344L235.547 481.094L328.359 573.906L337.188 582.734L346.016 573.906L598.359 321.563L715.703 438.906V641.406ZM715.703 421.172L598.359 303.828L337.188 565.078L235.547 463.359L84.2969 614.609V158.594H715.703V421.172Z" fill="#00008B"/>
                        <g id="sun">
                        <path id="Vector_2" d="M239.609 349.141C205.547 349.141 177.812 321.406 177.812 287.344C177.812 253.281 205.547 225.547 239.609 225.547C273.672 225.547 301.406 253.281 301.406 287.344C301.406 321.406 273.672 349.141 239.609 349.141ZM239.609 238.047C212.422 238.047 190.312 260.156 190.312 287.344C190.312 314.531 212.422 336.641 239.609 336.641C266.797 336.641 288.906 314.531 288.906 287.344C288.906 260.156 266.797 238.047 239.609 238.047Z" fill="#00008B"/>
                        <path id="Vector_3" d="M231.484 197.109C231.484 199.181 232.307 201.169 233.773 202.634C235.238 204.099 237.225 204.922 239.297 204.922C241.369 204.922 243.356 204.099 244.821 202.634C246.286 201.169 247.109 199.181 247.109 197.109C247.109 195.037 246.286 193.05 244.821 191.585C243.356 190.12 241.369 189.297 239.297 189.297C237.225 189.297 235.238 190.12 233.773 191.585C232.307 193.05 231.484 195.037 231.484 197.109Z" fill="#00008B"/>
                        <path id="Vector_4" d="M186.406 209.297C186.406 211.369 187.229 213.356 188.694 214.821C190.16 216.286 192.147 217.109 194.219 217.109C196.291 217.109 198.278 216.286 199.743 214.821C201.208 213.356 202.031 211.369 202.031 209.297C202.031 207.225 201.208 205.238 199.743 203.773C198.278 202.307 196.291 201.484 194.219 201.484C192.147 201.484 190.16 202.307 188.694 203.773C187.229 205.238 186.406 207.225 186.406 209.297Z" fill="#00008B"/>
                        <path id="Vector_5" d="M153.438 242.5C153.438 244.572 154.261 246.559 155.726 248.024C157.191 249.489 159.178 250.312 161.25 250.312C163.322 250.312 165.309 249.489 166.774 248.024C168.239 246.559 169.062 244.572 169.062 242.5C169.062 240.428 168.239 238.441 166.774 236.976C165.309 235.511 163.322 234.688 161.25 234.688C159.178 234.688 157.191 235.511 155.726 236.976C154.261 238.441 153.438 240.428 153.438 242.5Z" fill="#00008B"/>
                        <path id="Vector_6" d="M141.484 287.656C141.484 289.728 142.307 291.715 143.773 293.181C145.238 294.646 147.225 295.469 149.297 295.469C151.369 295.469 153.356 294.646 154.821 293.181C156.286 291.715 157.109 289.728 157.109 287.656C157.109 285.584 156.286 283.597 154.821 282.132C153.356 280.667 151.369 279.844 149.297 279.844C147.225 279.844 145.238 280.667 143.773 282.132C142.307 283.597 141.484 285.584 141.484 287.656Z" fill="#00008B"/>
                        <path id="Vector_7" d="M153.75 332.734C153.75 334.806 154.573 336.794 156.038 338.259C157.503 339.724 159.49 340.547 161.562 340.547C163.635 340.547 165.622 339.724 167.087 338.259C168.552 336.794 169.375 334.806 169.375 332.734C169.375 330.662 168.552 328.675 167.087 327.21C165.622 325.745 163.635 324.922 161.562 324.922C159.49 324.922 157.503 325.745 156.038 327.21C154.573 328.675 153.75 330.662 153.75 332.734Z" fill="#00008B"/>
                        <path id="Vector_8" d="M186.875 365.625C186.875 367.697 187.698 369.684 189.163 371.149C190.628 372.614 192.615 373.438 194.688 373.438C196.76 373.438 198.747 372.614 200.212 371.149C201.677 369.684 202.5 367.697 202.5 365.625C202.5 363.553 201.677 361.566 200.212 360.101C198.747 358.636 196.76 357.812 194.688 357.812C192.615 357.812 190.628 358.636 189.163 360.101C187.698 361.566 186.875 363.553 186.875 365.625Z" fill="#00008B"/>
                        <path id="Vector_9" d="M232.031 377.578C232.031 379.65 232.854 381.637 234.319 383.102C235.785 384.568 237.772 385.391 239.844 385.391C241.916 385.391 243.903 384.568 245.368 383.102C246.833 381.637 247.656 379.65 247.656 377.578C247.656 375.506 246.833 373.519 245.368 372.054C243.903 370.589 241.916 369.766 239.844 369.766C237.772 369.766 235.785 370.589 234.319 372.054C232.854 373.519 232.031 375.506 232.031 377.578Z" fill="#00008B"/>
                        <path id="Vector_10" d="M277.188 365.391C277.188 367.463 278.011 369.45 279.476 370.915C280.941 372.38 282.928 373.203 285 373.203C287.072 373.203 289.059 372.38 290.524 370.915C291.989 369.45 292.812 367.463 292.812 365.391C292.812 363.319 291.989 361.331 290.524 359.866C289.059 358.401 287.072 357.578 285 357.578C282.928 357.578 280.941 358.401 279.476 359.866C278.011 361.331 277.188 363.319 277.188 365.391Z" fill="#00008B"/>
                        <path id="Vector_11" d="M310.078 332.188C310.078 334.26 310.901 336.247 312.366 337.712C313.831 339.177 315.819 340 317.891 340C319.963 340 321.95 339.177 323.415 337.712C324.88 336.247 325.703 334.26 325.703 332.188C325.703 330.115 324.88 328.128 323.415 326.663C321.95 325.198 319.963 324.375 317.891 324.375C315.819 324.375 313.831 325.198 312.366 326.663C310.901 328.128 310.078 330.115 310.078 332.188Z" fill="#00008B"/>
                        <path id="Vector_12" d="M322.031 287.031C322.031 289.103 322.854 291.09 324.319 292.556C325.785 294.021 327.772 294.844 329.844 294.844C331.916 294.844 333.903 294.021 335.368 292.556C336.833 291.09 337.656 289.103 337.656 287.031C337.656 284.959 336.833 282.972 335.368 281.507C333.903 280.042 331.916 279.219 329.844 279.219C327.772 279.219 325.785 280.042 324.319 281.507C322.854 282.972 322.031 284.959 322.031 287.031Z" fill="#00008B"/>
                        <path id="Vector_13" d="M309.766 241.953C309.766 244.025 310.589 246.012 312.054 247.477C313.519 248.943 315.506 249.766 317.578 249.766C319.65 249.766 321.637 248.943 323.102 247.477C324.568 246.012 325.391 244.025 325.391 241.953C325.391 239.881 324.568 237.894 323.102 236.429C321.637 234.964 319.65 234.141 317.578 234.141C315.506 234.141 313.519 234.964 312.054 236.429C310.589 237.894 309.766 239.881 309.766 241.953Z" fill="#00008B"/>
                        <path id="Vector_14" d="M276.641 209.062C276.641 211.135 277.464 213.122 278.929 214.587C280.394 216.052 282.381 216.875 284.453 216.875C286.525 216.875 288.512 216.052 289.977 214.587C291.443 213.122 292.266 211.135 292.266 209.062C292.266 206.99 291.443 205.003 289.977 203.538C288.512 202.073 286.525 201.25 284.453 201.25C282.381 201.25 280.394 202.073 278.929 203.538C277.464 205.003 276.641 206.99 276.641 209.062Z" fill="#00008B"/>
                        </g>
                        </g>
                    </svg>
                </div>
                <p class="text-[18px] font-bold border-b border-[#1e2125] pb-[16px]" style="font-family: 'Montserrat', sans-serif;">Reprezentacinės svetainės</p>
                <p class="text-[16px] leading-[30px]" style="font-family: 'Albert Sans', sans-serif;">Šiuolaikiškos svetainės Jūsų verslo įvaizdžiui. Pagal poreikį tai gali būti wordpress arba laravel/vue.js sprendimas.</p>
            </div>
            <div class="flex flex-col gap-[16px]" id="cyber">
                <div class="w-[80px] h-[80px]">
                    <svg width="80" height="80" viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg" class="cyber">
                        <path d="M392.188 400C392.188 402.072 393.011 404.059 394.476 405.524C395.941 406.989 397.928 407.812 400 407.812C402.072 407.812 404.059 406.989 405.524 405.524C406.989 404.059 407.812 402.072 407.812 400C407.812 397.928 406.989 395.941 405.524 394.476C404.059 393.011 402.072 392.188 400 392.188C397.928 392.188 395.941 393.011 394.476 394.476C393.011 395.941 392.188 397.928 392.188 400Z" fill="#00008B"/>
                        <path d="M400 239.687C421.641 239.687 442.656 243.906 462.344 252.266C481.406 260.312 498.594 271.875 513.281 286.641C527.969 301.406 539.531 318.516 547.656 337.578C556.016 357.344 560.234 378.281 560.234 399.922C560.234 421.562 556.016 442.578 547.656 462.266C539.609 481.328 528.047 498.516 513.281 513.203C498.594 527.891 481.406 539.453 462.344 547.578C442.578 555.938 421.641 560.156 400 560.156C378.359 560.156 357.344 555.938 337.656 547.578C318.594 539.531 301.406 527.969 286.719 513.203C272.031 498.516 260.469 481.328 252.344 462.266C243.984 442.5 239.766 421.562 239.766 399.922C239.766 378.281 243.984 357.266 252.344 337.578C260.391 318.516 271.953 301.328 286.719 286.641C301.484 271.953 318.594 260.391 337.656 252.266C357.344 243.984 378.359 239.687 400 239.687ZM400 222.5C302.031 222.5 222.578 301.953 222.578 399.922C222.578 497.891 302.031 577.422 400 577.422C497.969 577.422 577.422 497.969 577.422 400C577.422 302.031 497.969 222.5 400 222.5Z" fill="#00008B"/>
                        <path d="M400 483.359C353.984 483.359 316.562 445.937 316.562 399.922C316.562 353.906 353.984 316.484 400 316.484C446.016 316.484 483.437 353.906 483.437 399.922C483.437 445.937 446.016 483.359 400 483.359ZM400 332.188C362.578 332.188 332.188 362.578 332.188 400C332.188 437.422 362.578 467.812 400 467.812C437.422 467.812 467.812 437.422 467.812 400C467.812 362.578 437.422 332.188 400 332.188Z" fill="#00008B"/>
                        <path d="M425.156 83.8281L451.797 155.938L457.578 171.484L473.359 176.641C481.406 179.297 498.437 186.719 507.266 190.781L521.875 197.5L536.406 190.547L605.078 157.891L641.328 194.219L609.141 264.063L602.188 279.141L609.688 293.984C615 304.453 619.531 315.469 623.281 326.719L628.516 342.734L644.375 348.359L716.016 373.828V425.156L643.906 451.797L628.359 457.578L623.203 473.359C619.531 484.609 614.922 495.547 609.609 506.094L601.953 521.172L609.219 536.406L641.875 605.078L605.547 641.406L535.938 609.141L520.859 602.188L506.016 609.688C495.547 615 484.531 619.531 473.281 623.281L457.266 628.516L451.641 644.375L426.172 716.016H374.844L348.203 643.906L342.422 628.359L326.641 623.203C318.594 620.547 301.563 613.125 292.734 609.062L278.125 602.344L263.594 609.297L194.922 641.953L158.672 605.625L190.859 535.859L197.812 520.781L190.313 505.937C185 495.469 180.469 484.453 176.719 473.203L171.484 457.188L155.625 451.563L83.9844 426.094V374.766L156.094 348.125L171.641 342.344L176.797 326.563C179.453 318.516 186.875 301.484 190.937 292.656L197.656 278.047L190.703 263.516L158.047 194.844L194.297 158.594L264.063 190.781L279.141 197.734L293.984 190.234C304.453 184.922 315.469 180.391 326.719 176.641L342.734 171.406L348.359 155.547L373.828 83.9063H425.156M449.141 49.4531H349.531L315.938 143.984C302.969 148.281 290.391 153.437 278.359 159.531L186.797 117.344L116.406 187.734L159.531 278.359C159.531 278.359 148.203 302.891 143.984 315.938L49.4531 350.859V450.391L143.984 483.984C148.281 496.953 153.437 509.453 159.531 521.484L117.344 613.047L187.734 683.438L278.359 640.312C278.359 640.312 302.891 651.641 315.938 655.859L350.859 750.391H450.391L483.984 655.859C496.953 651.563 509.453 646.406 521.484 640.312L613.047 682.5L683.438 612.109L640.312 521.484C646.406 509.453 651.641 496.953 655.859 483.984L750.391 449.062V349.531L655.859 315.938C651.563 302.969 646.406 290.469 640.312 278.438L682.5 186.875L612.109 116.484L521.562 159.609C521.562 159.609 496.953 148.281 483.984 144.062L449.141 49.4531Z" fill="#00008B"/>
                    </svg>
                </div>
                <p class="text-[18px] font-bold border-b border-[#1e2125] pb-[16px]" style="font-family: 'Montserrat', sans-serif;">Kibernetinės saugos analizė</p>
                <p class="text-[16px] leading-[30px]">E. komercija – nuolat augantis ir nuo technologijų neatsiejamas sektorius. Programuojame, diegiame ir palaikome inovatyvias sistemas, kurios padeda ambicingam verslui būti priekyje.</p>
            </div>
        </div>
    </section>-->
    <!--<section class="min-h-screen bg-[#dee4f0] mx-auto py-[64px]" id="about">
        <div class="flex flex-col justify-center max-w-[1200px] px-[26px] mx-auto">
            <h2 class="text-[46px] md:text-[70px] font-bold w-full" style="font-family: 'Montserrat', sans-serif;">Apie mane</h2>
            <div class="flex flex-col gap-[64px] mt-[64px]">
                <div class="flex flex-col md:flex-row gap-[16px] md:gap-[64px]">
                    <div class="flex flex-col gap-[16px] max-w-[600px]" style="font-family: 'Albert Sans', sans-serif;">
                        <p class="text-[22px] md:text-[30px]">Esu internetinių sistemų kūrėjas</p>
                        <p class="text-[18px] text-[#1e2125] leading-[30px]">Labas, esu plataus profilio internetinių sistemų, platformų kūrėjas. Daugiausiai dirbu su individualiais sprendimais.</p>
                    </div>
                    <div class="leading-[25px] mt-[16px]" style="font-family: 'Albert Sans', sans-serif;">
                        <p>#Php #Laravel #Silverstripe #Wordpress #WooCommerce</p>
                        <p>#Javascript #jQuery #Alpine.js #Vue.js #Tailwind #Bootstrap</p>
                        <p>#MySql #MongoDB #MariaDB</p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-[64px]" style="font-family: 'Albert Sans', sans-serif;">
                    <div class="flex flex-col gap-[16px] w-[300px] lg:w-[600px]">
                        <p class="flex gap-[16px] font-semibold text-[#1e2125]"><span class="w-[100px]">Amžius:</span><span class="font-normal">32m.</span></p>
                        <p class="flex gap-[16px] font-semibold text-[#1e2125]"><span class="w-[100px]">Gyvenu:</span><span class="font-normal">Utenoje</span></p>
                        <p class="flex gap-[16px] font-semibold text-[#1e2125]"><span class="w-[100px]">El. paštas:</span><a href="mailto: " class="font-normal">info@rkprod.lt</a></p>
                        <p class="flex gap-[16px] font-semibold text-[#1e2125]"><span class="w-[100px]">Tel.:</span><a href="callto: " class="font-normal">+37062671245</a></p>
                        <p class="flex gap-[16px] font-semibold text-[#1e2125]"><span class="w-[100px]">Patirtis:</span><span class="font-normal">4m. +</span></p>
                        <p class="flex gap-[16px] font-semibold text-[#1e2125]"><span class="w-[100px]">Įkainis:</span><span class="font-normal">15-25 eur/val.</span></p>
                    </div>
                    <img :src="`/assets/images/renatas_kraupas.jpg`" class="h-[250px] w-[250px] rounded-full object-cover border-4 border-[#000]">
                </div>
            </div>
        </div>
    </section>-->
    <!--<section class="flex flex-col max-w-[1200px] mx-auto py-[64px] px-[26px]" id="contacts">
        <h2 class="text-[46px] md:text-[70px] font-bold" style="font-family: 'Montserrat', sans-serif;">Kontaktai</h2>
        <FlashMessage v-show="sended">
            <p class="text-[#008b8b] text-[18px] font-medium">{{ messageData }}</p>
        </FlashMessage>
        <form class="flex flex-col gap-[16px] max-w-[600px] mt-[64px] mb-[64px]">
            <p class="text-[22px] md:text-[30px]">Susisiekite su manimi</p>
            <input type="text" :value="name" @input="name = $event.target.value" class="rounded-sm bg-[#eeeeee] placeholder:text-[14px] text-[14px] font-medium p-[10px] border-[#eeeeee] border-2 outline-none focus:border-[#00008b] focus:border-2 transition-all duration-500" placeholder="Vardas">
            <input type="email" :value="email" @input="email = $event.target.value" class="rounded-sm bg-[#eeeeee] placeholder:text-[14px] text-[14px] font-medium p-[10px] border-[#eeeeee] border-2 outline-none focus:border-[#00008b] focus:border-2 transition-all duration-500" placeholder="El. paštas" :class="{ 'border !border-[#fe8a8a] !text-[#fe8a8a] placeholder:text-[#fe8a8a]': errors?.email }">
            <textarea :value="message" @input="message = $event.target.value" class="rounded-sm bg-[#eeeeee] min-h-[150px] placeholder:text-[14px] text-[14px] font-medium p-[10px] border-[#eeeeee] border-2 outline-none focus:border-[#00008b] focus:border-2 transition-all duration-500" placeholder="Žinutė" :class="{ 'border !border-[#fe8a8a] !text-[#fe8a8a] placeholder:text-[#fe8a8a]': errors?.message }"></textarea>
            <button @click="contactForm" type="button" class="group flex gap-[16px] border-2 border-[#1e2125] text-[#1e2125] font-medium hover:bg-[#1e2125] hover:text-[#fff] rounded-sm py-[10px] px-[26px] w-fit px-[50px] ml-auto transition-all duration-500" :class="{ 'cursor-default': sendingMessage }" style="border-radius: 25px;">
                <span>Siųsti</span> 
                <svg class="h-[24px]" v-show="sendingMessage" version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                        <path class="fill-[#1e2125] group-hover:fill-[#fff]" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                        <animateTransform 
                            attributeName="transform" 
                            attributeType="XML" 
                            type="rotate"
                            dur="1s" 
                            from="0 50 50"
                            to="360 50 50" 
                            repeatCount="indefinite" />
                    </path>
                </svg>
            </button>
            
        </form>
    </section>-->
    <section class="flex flex-col mx-auto py-[64px] px-[32px] xl:px-[105px] mt-[64px]" id="about">
        <div class="flex flex-col gap-[4px] mb-[32px]">
            <span class="border-t border-[#000]"></span>
            <span class="text-[#161617] text-[16px]">APIE MUS</span>
        </div>
        <h2 class="text-[70px] lg:text-[130px] font-medium leading-[70px] lg:leading-[130px]">Skrendame į mėnulį</h2>
        <div class="flex flex-col lg:flex-row gap-[80px] mt-[32px]">
            <div class="flex flex-col gap-[16px] w-full lg:w-2/4">
                <p class="text-[22px] font-semibold">
                    Vadiname save profesionaliais klaviatūrų laužytojais
                </p>
                <p class="text-[18px] font-medium">Jau daugiau nei 4 metus padedame organizacijoms skaitmenizuoti procesus. Nedidelė patyrusių programuotojų komanda, moderniausios technologijos bei įrankiai – visa tai projekto sėkmei ir darbo efektyvumui.</p>
            </div>
            <div class="flex flex-col gap-[64px] w-full lg:w-2/4 mt-[32px]">
                <div class="flex flex-col gap-[16px] border-t border-[#000] pt-[32px]">
                    <p class="text-[100px] lg:text-[200px] leading-[80px] lg:leading-[160px]">17</p>
                    <p class="font-medium text-[22px]">Įgyvendinta projektų</p>
                </div>
                <div class="flex flex-col gap-[16px] border-t border-[#000] pt-[32px]">
                    <p class="text-[100px] lg:text-[200px] leading-[80px] lg:leading-[160px]">310000</p>
                    <p class="font-medium text-[22px]">Parašyta kodo eilučių</p>
                </div>
                <div class="flex flex-col gap-[16px] border-t border-[#000] pt-[32px]">
                    <p class="text-[100px] lg:text-[200px] leading-[80px] lg:leading-[160px]">3</p>
                    <p class="font-medium text-[22px]">Sulaužytą klaviatūrų</p>
                </div>
            </div>
        </div>
    </section>
    <section class="flex flex-col gap-[50px] mx-auto py-[64px] px-[32px] xl:px-[105px] h-full" id="portfolio">
        <div class="flex flex-col gap-[4px]">
            <span class="border-t border-[#000]"></span>
            <span class="text-[#161617] text-[16px]">DARBAI</span>
        </div>
        <div class="bg-[#7271D7] flex max-w-[1200px] h-[800px] overflow-hidden" x-data="{ imageHover: false }">
            <div class="bg-[#7271D7] z-10 flex flex-col p-[32px] w-2/5">
                <h2 class="text-[80px] leading-[70px] font-medium job-titles" style="font-family: 'Limelight', sans-serif;">Žinau ką renku</h2>
                <p class="text-[18px] font-medium job-small-title">Individualus sprendimas</p>
                <div class="job-rounded-button group bg-[#161617] rounded-full h-[100px] w-[100px] mt-auto flex items-center justify-center p-[20px] overflow-hidden cursor-pointer relative hover:border-8 border-[#5756be] duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-180 group-hover:translate-x-[100px] transition-all absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 duration-500" fill="#fff" viewBox="0 0 32 32"><g id="_4-Arrow_Left" data-name="4-Arrow Left"><path d="M32,15H3.41l8.29-8.29L10.29,5.29l-10,10a1,1,0,0,0,0,1.41l10,10,1.41-1.41L3.41,17H32Z"/></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-[270deg] -translate-y-[100px] group-hover:translate-y-0 transition-all duration-500" fill="#fff" viewBox="0 0 32 32"><g id="_4-Arrow_Left" data-name="4-Arrow Left"><path d="M32,15H3.41l8.29-8.29L10.29,5.29l-10,10a1,1,0,0,0,0,1.41l10,10,1.41-1.41L3.41,17H32Z"/></g></svg>
                </div>
            </div>
            <div class="flex w-full relative parallax-container">
                <div class="absolute left-0 top-0 w-full h-full cursor-pointer bg-[#47a8a5] flex items-center justify-center w-full parallax-image first-job-parallax-image transition-all duration-[1500ms]" :style="{ 'background-image': 'url(' + '/assets/images/work.webp' + ')' }">
                </div>
                <div class="absolute right-0 top-0 w-full h-full cursor-pointer bg-[#47a8a5] flex items-center justify-center w-full second-job-parallax-image transition-all duration-[1500ms] second-job-image bg-cover" :style="{ 'background-image': 'url(' + '/assets/images/work1.webp' + ')' }">
                </div>
            </div>
        </div>
        <div class="bg-[#7b99ff] flex flex-col max-w-[1000px] max-h-[800px] ml-auto w-full lg:w-[70%] h-[500px] mt-[64px]">
            <div class="flex flex-col lg:flex-row justify-between w-full p-[32px] gap-[16px] lg:gap-0">
                <div class="flex flex-col">
                    <h2 class="text-[35px] lg:text-[80px] leading-[30px] lg:leading-[70px] font-medium job-titles" style="font-family: 'Limelight', sans-serif;">Šiaulių bruklinas</h2>
                    <p class="text-[14px] lg:text-[18px] job-small-title">Reprezentacinė svetainė</p>
                </div>
                <div class="job-rounded-button group bg-[#161617] rounded-full h-[60px] lg:h-[100px] w-[60px] lg:w-[100px] mt-auto flex items-center justify-center p-[20px] overflow-hidden cursor-pointer relative hover:border-8 border-[#5076f5] duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-180 group-hover:translate-x-[100px] transition-all absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 duration-500" fill="#fff" viewBox="0 0 32 32"><g id="_4-Arrow_Left" data-name="4-Arrow Left"><path d="M32,15H3.41l8.29-8.29L10.29,5.29l-10,10a1,1,0,0,0,0,1.41l10,10,1.41-1.41L3.41,17H32Z"/></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-[270deg] -translate-y-[100px] group-hover:translate-y-0 transition-all duration-500" fill="#fff" viewBox="0 0 32 32"><g id="_4-Arrow_Left" data-name="4-Arrow Left"><path d="M32,15H3.41l8.29-8.29L10.29,5.29l-10,10a1,1,0,0,0,0,1.41l10,10,1.41-1.41L3.41,17H32Z"/></g></svg>
                </div>
            </div>
            <div class="cursor-pointer flex items-center justify-center h-full bg-[#3451b5] parallax-image" :style="{ 'background-image': 'url(' + '/assets/images/works/sb.svg' + ')' }">
            </div>
        </div>
        <div class="bg-[#c84648] flex max-w-[1200px] h-[800px] w-4/5 mt-[64px]">
            <div class="flex flex-col p-[32px] w-2/5">
                <h2 class="text-[80px] leading-[70px] font-medium job-titles" style="font-family: 'Limelight', sans-serif;">Pramogų organizavimas</h2>
                <p class="text-[18px] job-small-title">El. parduotuvė</p>
                <div class="job-rounded-button group bg-[#161617] rounded-full h-[100px] w-[100px] mt-auto flex items-center justify-center p-[20px] overflow-hidden cursor-pointer relative hover:border-8 border-[#c92d2f] duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-180 group-hover:translate-x-[100px] transition-all absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 duration-500" fill="#fff" viewBox="0 0 32 32"><g id="_4-Arrow_Left" data-name="4-Arrow Left"><path d="M32,15H3.41l8.29-8.29L10.29,5.29l-10,10a1,1,0,0,0,0,1.41l10,10,1.41-1.41L3.41,17H32Z"/></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-[270deg] -translate-y-[100px] group-hover:translate-y-0 transition-all duration-500" fill="#fff" viewBox="0 0 32 32"><g id="_4-Arrow_Left" data-name="4-Arrow Left"><path d="M32,15H3.41l8.29-8.29L10.29,5.29l-10,10a1,1,0,0,0,0,1.41l10,10,1.41-1.41L3.41,17H32Z"/></g></svg>
                </div>
            </div>
            <div class="cursor-pointer w-full flex justify-center items-cenetr bg-[#e25a5c] px-[100px] parallax-image" :style="{ 'background-image': 'url(' + '/assets/images/works/po.svg' + ')' }">
            </div>
        </div>
        <div class="bg-[#52a8c3] flex max-w-[1200px] h-[800px] w-4/5 ml-auto mt-[64px]">
            <div class="flex flex-col p-[32px] w-2/5">
                <h2 class="text-[80px] leading-[70px] font-medium job-titles" style="font-family: 'Limelight', sans-serif;">Tėvų zona</h2>
                <p class="text-[18px] job-small-title">Individualus sprendimas</p>
                <div class="job-rounded-button group bg-[#161617] rounded-full h-[100px] w-[100px] mt-auto flex items-center justify-center p-[20px] overflow-hidden cursor-pointer relative hover:border-8 border-[#37a1c2] duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-180 group-hover:translate-x-[100px] transition-all absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 duration-500" fill="#fff" viewBox="0 0 32 32"><g id="_4-Arrow_Left" data-name="4-Arrow Left"><path d="M32,15H3.41l8.29-8.29L10.29,5.29l-10,10a1,1,0,0,0,0,1.41l10,10,1.41-1.41L3.41,17H32Z"/></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="rotate-[270deg] -translate-y-[100px] group-hover:translate-y-0 transition-all duration-500" fill="#fff" viewBox="0 0 32 32"><g id="_4-Arrow_Left" data-name="4-Arrow Left"><path d="M32,15H3.41l8.29-8.29L10.29,5.29l-10,10a1,1,0,0,0,0,1.41l10,10,1.41-1.41L3.41,17H32Z"/></g></svg>
                </div>
            </div>
            <div class="cursor-pointer w-full flex justify-center items-cenetr bg-[#f8f1c9] px-[100px] parallax-image" :style="{ 'background-image': 'url(' + '/assets/images/works/tz.svg' + ')' }">
            </div>
        </div>
    </section>
    <section class="flex flex-col mx-auto py-[64px] px-[32px] xl:px-[105px] mt-[64px]" id="contacts">
        <div class="flex flex-col gap-[4px]">
            <span class="border-t border-[#000]"></span>
            <span class="text-[#161617] text-[16px]">KONTAKTAI</span>
        </div>
        <div class="rounded-xl w-full py-[70px] px-[100px] contact-section-bg mt-[32px]">
            <h2 class="text-[130px] font-semibold">Brūkštelk mums.</h2>
            <p class="text-[24px]">Susisiekite su mumis jeigu turite klausimų.</p>
            <form class="flex flex-col gap-[16px] max-w-[800px] mt-[64px] mb-[64px]">
                <input type="text" :value="name" @input="name = $event.target.value" class="rounded-md bg-transparent placeholder:text-[18px] placeholder:text-[#161617] text-[18px] text-[#161617] px-[16px] py-[14px] border-[#161617] border outline-none transition-all duration-500" placeholder="Vardas">
                <input type="email" :value="email" @input="email = $event.target.value" class="rounded-md bg-transparent placeholder:text-[18px] placeholder:text-[#161617] text-[18px] text-[#161617] px-[16px] py-[14px] border-[#161617] border outline-none transition-all duration-500" placeholder="El. paštas" :class="{ 'border !border-[#fe8a8a] !text-[#fe8a8a] placeholder:text-[#fe8a8a]': errors?.email }">
                <textarea :value="message" @input="message = $event.target.value" class="rounded-md bg-transparent placeholder:text-[18px] placeholder:text-[#161617] text-[18px] text-[#161617] min-h-[150px] px-[16px] py-[14px] border-[#161617] border outline-none transition-all duration-500" placeholder="Žinutė" :class="{ 'border !border-[#fe8a8a] !text-[#fe8a8a] placeholder:text-[#fe8a8a]': errors?.message }"></textarea>
                <button @click="contactForm" type="button" class="overflow-hidden mt-[16px] group flex items-center gap-[16px] bg-[#161617] border border-[#161617] text-[#fff] font-medium hover:bg-[#1e2125] hover:text-[#fff] py-[14px] px-[26px] w-fit px-[50px] transition-all duration-500 rounded-md" :class="{ 'cursor-default': sendingMessage }">
                    <span>Siųsti</span> 
                    <div class="group-hover:translate-x-[110px] translate-all duration-[1000ms]">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </div>
                    <svg class="h-[24px]" v-show="sendingMessage" version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                            <path class="fill-[#fff]" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                            <animateTransform 
                                attributeName="transform" 
                                attributeType="XML" 
                                type="rotate"
                                dur="1s" 
                                from="0 50 50"
                                to="360 50 50" 
                                repeatCount="indefinite" />
                        </path>
                    </svg>
                </button>                
            </form>
        </div>        
        <div class="mt-[64px]">
            <span class="border-t border-[#000] block"></span>
        </div>
    </section>
</template>

<script setup>

// Imports
import FlashMessage from '@/Components/Elements/FlashMessage.vue';
import { gsap } from 'gsap';
import ScrollMagic from 'scrollmagic';
import 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import { ref } from 'vue';
import { onMounted } from 'vue';

// Refs
const errors = ref({})
const sended = ref(false);
const sendingMessage = ref(false);
const messageData = ref({});
const custom = ref(null);
const customBubbles = ref(50);

const controller = new ScrollMagic.Controller();

const beforeEnterTinyText = (el) => {
    el.style.transform = 'translateY(2000%)';
};
const enterTinyText = (el) => {
    gsap.to(el, {y:'-50%', x:'-50%', opacity:'1', duration:2, stagger:0.2, delay: 1});
};

const beforeEnterBigText = (el) => {
    el.style.transform = 'translateY(250%)';
};
const enterBigText = (el) => {
    //gsap.timeline()
            //.from('#jobT', {y:'-50%', x: '-50%', opacity:'1', duration:2, stagger:0.2, delay: 1});//(el, {y:'-50%', x: '-50%', opacity:'1', duration:2, stagger:0.2, delay: 1});
};
const afterEnterBigText = (el) => {
    //gsap.to(el, {y:'-250%', x: '-50%', opacity:'0.5', duration:2, stagger:0.2, delay: 3});
};

const beforeEnterJobRoundButton = (el) => {
    el.style.scale = '0';
};
const enterJobRoundButton = (el) => {
    gsap.to(el, {scale:'1', x: '0', opacity:'1', duration:2, stagger:0.2, delay: 1});
};

const beforeEnterSmallText = (el) => {
    el.style.transform = 'translateY(250%)';
};
const enterSmallText = (el) => {
    gsap.to(el, {y:'0%', opacity:'1', duration:2, stagger:0.2, delay: 3});
};

// Props & Emit    

const props = defineProps({
        email: { type: String },
        name: { type: String },
        message: { type: String }
    });

// Methods

function contactForm()
{   
    sendingMessage.value = true;
    axios.post('/api/contact-form', {
        name: props.name,
        email: props.email,
        message: props.message
    })
    .then(response => {
        sendingMessage.value = false;
        sended.value = true;
        messageData.value = response.data.data;        
    })
    .catch(function (error) {
        if (error.response && error.response.status === 422) {
            errors.value = error.response.data.errors
            sendingMessage.value = false;
        }
    });
}

let curX = 0;
let curY = 0;
let tgX = 0;
let tgY = 0;

document.addEventListener('DOMContentLoaded', () => {
    const interBubble = document.querySelector('.interactive');

    function move()
    {
        curX += (tgX - curX) / 20;
        curY += (tgY - curY) / 20;

        interBubble.style.transform = `translate(${Math.round(curX)}px, ${Math.round(curY)}px)`;
        requestAnimationFrame( () => {
            move();
        });
    }

    window.addEventListener('mousemove', (e) => {
        tgX = e.clientX;
        tgY = e.clientY;
    })

    move();
})


/*function indexTitle() 
{
    let tl = gsap.timeline({defaults: {ease: "SlowMo.easeOut"}});
    console.log(custom);
    gsap.to(custom, {y:'0%', duration:0.7, stagger:0.2});
}*/

onMounted(() => {
    const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
            if(entry.isIntersecting)
            {
                entry.target.classList.add('show');
            }
            else
            {
                entry.target.classList.remove('show');
            }
        });
    });

    //Job Titles
    const jobTitles = document.querySelectorAll('.job-titles');
    jobTitles.forEach((el) => {
        observer.observe(el);
    });

    //Job Buttons
    const jobButtons = document.querySelectorAll('.job-rounded-button');
    jobButtons.forEach((el) => {
        observer.observe(el);
    });

    //Job Mini Titles
    const jobMiniTitles = document.querySelectorAll('.job-small-title');
    jobMiniTitles.forEach((el) => {
        observer.observe(el);
    });

    const customBubble = document.querySelectorAll('.custom-bubble');
    customBubble.forEach((element) => element.addEventListener('mouseover', function() {
        element.classList.toggle('bg-[#8a2be2]')
    }));

    const eshopBubble = document.querySelectorAll('.eshop-bubble');
    eshopBubble.forEach((element) => element.addEventListener('mouseover', function() {
        element.classList.toggle('opacity-0')
    }));

    const webBubble = document.querySelectorAll('.web-bubble');
    webBubble.forEach((element) => element.addEventListener('mouseover', function() {
        element.classList.toggle('!rounded-none')
    }));

    const firstJobParallaxImages = document.querySelectorAll('.first-job-parallax-image');
    const secondJobParallaxImages = document.querySelectorAll('.second-job-parallax-image');
    const parallaxContainers = document.querySelectorAll('.parallax-container');

    parallaxContainers.forEach((element) => element.addEventListener('mouseover', function() {
        element.children[0].classList.add('remove-first-job-image');
        //setTimeout(() => {
            element.children[1].classList.remove('second-job-image');
            //element.children[1].classList.add('z-10');
        //}, "1000");
        
    }));

    parallaxContainers.forEach((element) => element.addEventListener('mouseleave', function() {
        console.log('leaving');
        element.children[1].classList.add('second-job-image');
        //element.children[1].classList.remove('z-10');
        //setTimeout(() => {
            element.children[0].classList.remove('remove-first-job-image');
        //}, "1000");
    }));

    gsap.timeline({repeat: -1, repeatDelay: 0})
        .from('#heroTitleFirst', {yPercent: '230', opacity:'1', duration:1, stagger:0.2, delay: 1})
        .to('#heroTitleFirst', {yPercent: '-200', opacity:'0.5', duration:2, stagger:0.2, delay: 2})
        .from('#heroTitleSecond', {yPercent: '230', opacity:'1', duration:1, stagger:0.2, delay: -0.5})
        .to('#heroTitleSecond', {yPercent: '-200', opacity:'0.5', duration:2, stagger:0.2, delay: 1})
        .from('#heroTitleThird', {yPercent: '230', opacity:'1', duration:1, stagger:0.2, delay: -0.5})
        .to('#heroTitleThird', {yPercent: '-200', opacity:'0.5', duration:2, stagger:0.2, delay: 1});
    });

</script>