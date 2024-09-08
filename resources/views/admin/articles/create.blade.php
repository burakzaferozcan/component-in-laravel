@php
    $options=['-1'=>'Kategori Seçin','1'=>'PHP','2'=>'C#'];
@endphp
@extends("layouts.admin")

@section("css")
@endsection

@section("icerik")
    <x-admin.layouts.card class="w-50 mx-auto">
        <x-slot:title>Yeni Makale Ekle</x-slot:title>
        <x-slot:content>
            <form action="" class="w-100 text-start">
                <x-admin.elements.input
                    :labelClasses="''"
                    :inputClasses="''"
                    :id="'name'"
                    :placeholder="'Makale Adı'"
                    :isDisabled="false"
                    :defaultValue="''"
                    :type="'text'"
                    :parentClasses="''"
                >
                    <x-slot:label>Makale Adı</x-slot:label>
                </x-admin.elements.input>
                <x-admin.elements.textarea
                    :labelClasses="'mb-2'"
                    :inputClasses="''"
                    :id="'articleContent'"
                    :placeholder="'Makale İçerik'"
                    :isDisabled="false"
                    :defaultValue="''"
                    :parentClasses="'mt-3'"
                    :rows="'5'"
                >
                    <x-slot:label>Makale İçerik</x-slot:label>
                </x-admin.elements.textarea>
                <x-admin.elements.select
                    :labelClasses="'mb-2'"
                    :id="'category'"
                    :isDisabled="false"
                    inputClasses="''"
                    :defaultValue="'-1'"
                    :parentClasses="'mt-3'"
                    :options="$options"
                >
                    <x-slot:label>Makale Kategori</x-slot:label>
                </x-admin.elements.select>
                <x-admin.elements.input
                    :type="'checkbox'"
                    :id="'status'"
                    :inputClasses="''"
                    :defaultValue="'1'"
                    :parentClasses="'mt-3'"
                    :isLabelAfter="true"
                >
                    <x-slot:label>Makale Yayınlansın mı?</x-slot:label>

                </x-admin.elements.input>
                <hr>
                <x-admin.elements.input
                    :labelClasses="''"
                    :inputClasses="'btn btn-success w-100'"
                    :id="'btnSave'"
                    :placeholder="''"
                    :isDisabled="false"
                    :defaultValue="'Kaydet'"
                    :type="'submit'"
                    :parentClasses="'mt-3'"
                >
                </x-admin.elements.input>
            </form>
        </x-slot:content>
        <x-slot:footer>Lorem ipsum dolor</x-slot:footer>

    </x-admin.layouts.card>
@endsection

@section("js")
@endsection
