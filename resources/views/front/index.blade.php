@extends("layouts.front")

@section("css")
@endsection

@section("icerik")
    <hr>
    <h1>homee</h1>
    <hr>
    @php
        $placeholder="ad soyad giriniz";
        $color="danger";
        $error=false;
    @endphp
    <x-input-text :type="'text'" :placeholder="$placeholder" class="form-control"/>
    <hr>
    <x-input-text2 :type="'submit'" :placeholder="$placeholder" class="bg-" :color="$color"/>
    <hr>
    <x-input-text3 :type="'text'" :placeholder="$placeholder" :$error/>
    <hr>
    <x-article>
        <x-slot name="title">Makale 1 başlık 1</x-slot>
        <x-slot:title2>Makale 1 başlık 2</x-slot>

        <x-slot name="content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel euismod enim. Mauris rutrum eu lacus a rutrum. Integer volutpat ultrices augue, nec porta arcu venenatis ac. Nulla vulputate quis purus ut laoreet. Praesent lobortis at ante nec bibendum. Fusce vel aliquam ipsum, in lobortis ipsum. Ut id odio in metus viverra venenatis vel sed nisl. Aenean risus turpis, feugiat eu molestie quis, porttitor vitae augue. Praesent mauris quam, suscipit eget dictum semper, scelerisque id purus. Proin nec gravida leo, mollis bibendum dui. Maecenas in odio eget nibh cursus interdum non sed nisi. Duis fringilla mauris ante, eget efficitur nulla bibendum ac. Sed dapibus, felis in dapibus fringilla, massa velit rutrum ligula, eu dictum ante ligula nec quam. Morbi faucibus mollis ante sed rhoncus. Donec rhoncus ante sem, nec fringilla sapien sollicitudin et.
        </x-slot>
    </x-article>
@endsection

@section("js")
@endsection
