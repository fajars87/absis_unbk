<style>

    page[size='A4'] {
        background: white;
        width: 21cm;
        height: 29.7cm;
        display: block;
        margin: 0 auto;
        padding: 0.5cm;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
    }

    @media print {
        body, page[size='A4'] {
            margin: 0;
            box-shadow: 0;
        }
    }
</style>        

{!! $data['isi'] !!}