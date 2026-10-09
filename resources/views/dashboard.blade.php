<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <!-- <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div> -->
        <!-- <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div> -->
        <x-layouts::site title="من نحن">
    <section class="bg-gradient-to-b from-zinc-50 to-white dark:from-zinc-900 dark:to-zinc-950">
        <div class="mx-auto w-full max-w-6xl px-4 py-16 text-center sm:px-6 sm:py-24">
            <h1 class="text-3xl font-bold leading-tight sm:text-5xl">مجمع الهامة الشرعي التعليمي</h1>
            <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-300">
                مجمعٌ شرعيٌّ تعليميٌّ يجمع بين تحفيظ القرآن الكريم والعلوم الشرعية والتعليم المنتظم،
                لإعداد جيلٍ متّصلٍ بكتاب الله وسُنّة نبيّه عليه الصلاة والسلام.
            </p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <flux:button :href="route('donations')" variant="primary">تبرع للمجمع</flux:button>
                <flux:button :href="'#services'" variant="outline">خدمات المجمع</flux:button>
            </div>
        </div>
    </section>

    <section class="mx-auto w-full max-w-6xl px-4 py-14 sm:px-6">
        <div class="mx-auto max-w-3xl">
            <flux:heading level="2">من نحن</flux:heading>

            <div class="mt-5 space-y-4 text-lg leading-8 text-zinc-600 dark:text-zinc-300">
                <p>
                    إنّ مجمع الهامة الشرعي التعليمي مجمعٌ علميٌّ شرعيٌّ، أُنشئ ليكون منارةً للعلم والهداية،
                    يسعى لتخريج طلبةٍ متفقهين في دينهم، حافظين لكتاب الله، نافعين لأمّتهم بعلمٍ وعملٍ صادق.
                </p>
                <p>
                    يضم المجمع نخبةً من المعلمين والدعاة المتخصصين، ويوفّر بيئةً علميةً آمنة تُنمّي في الطلبة
                    حبّ العلم، وآداب الخلق، والانتماء إلى لغتهم العربية وهويّتهم الإسلامية.
                </p>
                <p>
                    ويعمل المجمع على تنظيم حلقاته ودوراته بما يواكب حاجات الطلاب في مختلف الأعمار والمستويات،
                    مع الاهتمام بالمتابعة والتقييم لضمان جودة التعليم وتحقيق أهدافه.
                </p>
            </div>
        </div>
    </section>

    <section id="services" class="border-t border-zinc-200 bg-zinc-50 dark:border-zinc-800 dark:bg-zinc-900">
        <div class="mx-auto w-full max-w-6xl px-4 py-14 sm:px-6">
            <div class="text-center">
                <flux:heading level="2">خدمات المجمع</flux:heading>
                <p class="mx-auto mt-3 max-w-2xl text-zinc-600 dark:text-zinc-300">
                    مجموعةٌ متكاملة من البرامج والخدمات العلمية والتربوية التي يقدّمها المجمع لطلبه وأهاليه.
                </p>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-800">
                    <flux:icon.book-open class="size-8 text-emerald-600 dark:text-emerald-400" />
                    <h3 class="mt-4 text-lg font-semibold">تحفيظ القرآن الكريم</h3>
                    <p class="mt-2 leading-7 text-zinc-600 dark:text-zinc-300">
                        حلقات يومية لتحفيظ القرآن الكريم ومراجعته، مع ضبط أحكام التلاوة والقراءات الصحيحة.
                    </p>
                </div>

                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-800">
                    <flux:icon.academic-cap class="size-8 text-emerald-600 dark:text-emerald-400" />
                    <h3 class="mt-4 text-lg font-semibold">العلوم الشرعية</h3>
                    <p class="mt-2 leading-7 text-zinc-600 dark:text-zinc-300">
                        دروس متدرّجة في الفقه والتفسير والحديث والسيرة النبوية، بإشراف نخبة من المتخصصين.
                    </p>
                </div>

                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-800">
                    <flux:icon.language class="size-8 text-emerald-600 dark:text-emerald-400" />
                    <h3 class="mt-4 text-lg font-semibold">اللغة العربية</h3>
                    <p class="mt-2 leading-7 text-zinc-600 dark:text-zinc-300">
                        حلقات النحو والصرف والإملاء لبناء لغةٍ سليمة تُمكّن الطالب من فهم النصوص الشرعية.
                    </p>
                </div>

                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-800">
                    <flux:icon.calendar-days class="size-8 text-emerald-600 dark:text-emerald-400" />
                    <h3 class="mt-4 text-lg font-semibold">الدورات والبرامج</h3>
                    <p class="mt-2 leading-7 text-zinc-600 dark:text-zinc-300">
                        دورات علمية وبرامج موسمية مكثّفة خلال العطل والمواسم، مفتوحة لأبناء المجمع والجمهور.
                    </p>
                </div>

                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-800">
                    <flux:icon.building-library class="size-8 text-emerald-600 dark:text-emerald-400" />
                    <h3 class="mt-4 text-lg font-semibold">المكتبة والمرجعية</h3>
                    <p class="mt-2 leading-7 text-zinc-600 dark:text-zinc-300">
                        مكتبة علمية تضم المراجع الأصيلة والمصادر الحديثة لخدمة طلبة العلم والباحثين.
                    </p>
                </div>

                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-800">
                    <flux:icon.user-group class="size-8 text-emerald-600 dark:text-emerald-400" />
                    <h3 class="mt-4 text-lg font-semibold">برامج الناشئة</h3>
                    <p class="mt-2 leading-7 text-zinc-600 dark:text-zinc-300">
                        برامج تربوية ومسابقات وأنشطة تُنمّي في الأبناء حبّ القرآن والانتماء لدينهم ولغتهم.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto w-full max-w-6xl px-4 py-14 text-center sm:px-6">
        <flux:heading level="2">شارك في نشر الخير</flux:heading>
        <p class="mx-auto mt-3 max-w-2xl text-zinc-600 dark:text-zinc-300">
            تبرّعك يواصل مشوار حلقات المجمع ويقرّبنا من تحقيق أهدافنا. تبرّعك اليوم أثرٌ باقٍ غداً.
        </p>
        <div class="mt-6">
            <flux:button :href="route('donations')" variant="primary">تبرع الآن</flux:button>
        </div>
    </section>
</x-layouts::site>
    </div>
</x-layouts::app>
