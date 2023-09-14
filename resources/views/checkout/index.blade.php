<x-app-layout>
    <div class="bg-tertiary-900 text-primary-100">
        <div class="fixed left-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-900" aria-hidden="true"></div>
        <div class="fixed right-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-800" aria-hidden="true"></div>

        <div class="relative mx-auto grid max-x-7xl grid-cols-1 lg:grid-cols-2 gap-x-16 lg:px-8 lg:pt-16">
            <section aria-labelledby="summary-heading"
                class="py-12 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0 bg-tertiary-800">
                <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                    <dl>
                        <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                    </dl>

                    <x-checkout.product-list>
                        <x-checkout.product-item name="High Wall Tote"
                            image="https://cdn.dooca.store/117/products/bolsa-chanel-preta_640x640+fill_ffffff.jpg?v=1626967225"
                            price="210,00" :features="[
                            'White and black',
                            '15L',
                        ]" />
                    </x-checkout.product-list>
                    <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-sm font-medium">
                        <x-checkout.summary-item title="Subtotal" value="570,00" />
                        <x-checkout.summary-item title="Frete" value="7,00" />
                        <x-checkout.summary-item title="Total" value="577,00" isLast="true" />
                    </dl>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>