<x-tests.app>
    <x-slot name="header">ヘッダー２</x-slot>
コンポーネントテスト１


    <x-tests.card title="タイトル1" content="本文1" :message="$message" />
    <x-tests.card title="タイトル2"  />
    <x-tests.card title="CSSを変更したい" class="bg-red-500" />

</x-tests.app>
