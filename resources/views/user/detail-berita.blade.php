@extends('templates.user.app')

@section('title', 'Detail Berita')

@section('content')
    <!-- Breadcrumb -->
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-28 lg:px-28">
        <x-bread-crumb>
            <x-bread-crumb-link
                pathName="Berita"
                classStyle="!bg-transparent !text-gray-600"
                link="{{ route('berita') }}"
            />
            <x-bread-crumb-link
                pathName="Detail Berita"
            />
        </x-bread-crumb>
    </div>

    <!-- Detail Berita -->
    <div class="px-8 pt-24 space-y-10 sm:px-14 sm:pt-40 lg:pt-20 lg:px-40">
        <div class="border-l-4 border-sky-600">
            <h1 class="px-10 text-gray-600 text-5xl">Detail Berita</h1>
        </div>
        <div class="space-y-10">
            <div class="space-y-4">
                <h1 class="text-sky-600 text-4xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, suscipit!</h1>
                <h2 class="text-gray-600 text-xl">30 April 2024</h2>
            </div>
            <div class="w-full">
                <img src="{{ asset('assets/ruangan/kelas2.png') }}" alt="" class="w-full rounded-lg bg-cover bg-center">
            </div>
            <div class="">
                <article class="text-gray-600 text-xl text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad aliquam atque consectetur doloremque eum eveniet illo impedit, iusto perferendis praesentium quod sequi voluptate. Ab aliquam blanditiis commodi ea eius eos exercitationem facere hic id incidunt itaque labore laboriosam molestias natus nisi, provident quas quisquam recusandae temporibus voluptas? Aspernatur blanditiis delectus deleniti dolor doloremque, facilis iste, perspiciatis quas quos repellendus rerum sed similique. Ad aliquid architecto at consectetur corporis debitis earum eius error fugit iusto, laboriosam libero maiores natus nemo neque, nisi optio porro quaerat qui recusandae, repellat reprehenderit sapiente sint sit soluta vel voluptas.
                    <br><br>
                    Alias consequuntur illum laudantium molestiae non odio vel voluptates. Aliquam architecto assumenda commodi, consequatur corporis cupiditate dicta enim eveniet id illo inventore nihil obcaecati officiis perspiciatis, quibusdam rem sed sint sunt tempora totam? Accusamus accusantium atque culpa error illum, magni maiores modi neque nisi nostrum obcaecati pariatur reiciendis reprehenderit rerum sit sunt velit voluptatem voluptates! A commodi, distinctio ipsam maxime nihil officiis pariatur. Alias aperiam architecto blanditiis consectetur dignissimos dolor, dolorem ex facere illum ipsam, magnam nesciunt nobis praesentium quaerat, quas ratione repudiandae tempore totam unde voluptates? A accusamus ad aliquam consequatur cupiditate fugit itaque, iure, molestiae nesciunt nihil perspiciatis porro quae sapiente temporibus ut.
                    <br><br>
                    Alias animi aperiam aspernatur corporis dolore dolorem dolorum earum fugiat incidunt magnam maxime minima molestiae nulla perspiciatis porro provident, quibusdam quis ratione, sed similique tempora tempore veniam voluptatibus? Alias cum dolor ducimus enim facilis, magnam necessitatibus nisi optio perspiciatis possimus quam quibusdam quis recusandae reiciendis similique tempora voluptas voluptate! Amet, autem dolore dolorum error expedita, fuga, impedit ipsum iste iusto natus necessitatibus rem voluptatem voluptatibus. Ab alias, illo iure, molestiae nulla omnis quae quia quos recusandae reiciendis reprehenderit similique suscipit vero. Consequuntur dolore eveniet iure officiis placeat quaerat rem sapiente soluta! Accusantium aliquid amet blanditiis ea expedita itaque magnam odit quibusdam totam vero? Consequuntur debitis distinctio doloremque dolores esse est eum nulla, repellendus tenetur velit. Ab aliquid aperiam autem cumque et fugiat id incidunt laudantium maiores nam obcaecati odio, porro quo reprehenderit sed. A enim impedit iusto laboriosam magnam modi quasi sapiente temporibus. Amet asperiores at blanditiis commodi corporis distinctio ea eius eos esse est excepturi facilis fugiat id iusto magni minima modi molestiae natus nemo neque optio perspiciatis praesentium provident quod recusandae reiciendis sunt tenetur, vero voluptatem voluptatum.
                    <br><br>
                    A ab aperiam at consectetur, consequuntur culpa debitis dolor dolore ea exercitationem facilis incidunt laudantium maxime modi natus nihil nulla numquam odio officia placeat, provident recusandae reiciendis reprehenderit sapiente sed sequi sit soluta sunt suscipit tempora temporibus unde vero voluptatibus. Accusamus aut, autem distinctio error nemo nostrum porro suscipit? Ab aspernatur atque consequuntur dolorum? Accusamus deserunt dicta distinctio earum ipsa magni maxime, perspiciatis vitae! Architecto, obcaecati unde. Aliquid, amet aut beatae consectetur cum dolor doloribus ducimus error facilis id ipsa, molestiae mollitia nesciunt nisi nobis officiis placeat praesentium, provident quae quaerat qui recusandae repudiandae temporibus totam ut veritatis voluptatibus! Aut, fugit, provident. Blanditiis consequuntur earum impedit perspiciatis provident quasi? Commodi ducimus eveniet fugiat labore nam quidem, quod ullam? Alias doloribus, ducimus.
                </article>
            </div>
        </div>
        <div class="border-l-4 border-sky-600">
            <h1 class="px-10 text-gray-600 text-5xl">Berita Lainnya</h1>
        </div>

        <div class="w-full overflow-x-auto mt-10 pb-8 2xl:justify-center flex">
            <div class="w-[1760px] flex flex-wrap justify-between">
                @for ($i = 0; $i < 3; $i++)
                    <x-card
                        imgFile="{{ asset('assets/Hemodialisis.jpg') }}"
                        class="w-[350px]"
                        name="PEMERIKSAAN USG DAN KONSULTASI GRATIS BULAN JUNI"
                        date="29 Maret 2024"
                        unitSold="Layanan Hemodialisis ini dapat membantu bagi yang mengalami Gagal Ginjal dan memerlukan tindakan cuci darah secara periodik"
                        button="Lihat Selengkapnya"
                        linkButton="{{ route('detail-berita') }}"
                    />
                @endfor
            </div>
        </div>
    </div>
@endsection
