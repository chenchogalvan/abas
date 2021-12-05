@extends('index')

@push('js')
<script src="https://sdk.mercadopago.com/js/v2"></script>


<script>
    const mp = new MercadoPago("{{ config('services.mercadopago.key') }}", {
            locale: 'es-MX'
        });
    // Inicializa el checkout
    const checkout = mp.checkout({
        preference: {
            id: "{{ $preference->id }}"
        },
        theme: {
            elementsColor: '#ff2d37',
            headerColor: '#ff2d37'
        },
        autoOpen: true, // Habilita la apertura automática del Checkout Pro

    });


</script>
@endpush
