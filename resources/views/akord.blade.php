@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/home.png') }}" rel="shortcut icon">
@endsection

@section('content')
{{-- Page wrapper --}}
<div class="page-wrapper">

  {{-- Page header --}}
  <div class="page-header d-print-none">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-between">

        {{-- Page pre-title --}}
        <div class="col">
          <div class="page-pretitle text-primary">
            {{ __($pretitle) ?? '' }}
          </div>
          <h2 class="page-title text-primary">
            {{ __($title) ?? '' }}
          </h2>
        </div>
        {{-- End Page pre-title --}}

        {{-- Page buttons --}}
        <div class="ms-auto d-print-none col-auto">
          <div class="btn-list">
            <div class="d-flex justify-content-end">
              {{-- Page buttons --}}
              <div class="ms-auto d-print-none col-auto">
                <div class="btn-list">
                  <span class="d-none d-sm-inline">
                    <a class="btn" href="#">
                      {{ __('Secondary') }}
                    </a>
                  </span>
                  <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-success" href="#">
                    Success modal
                  </a>
                  <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-warning" href="#">
                    Warning modal
                  </a>
                  <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-danger" href="#">
                    Danger modal
                  </a>
                </div>
              </div>
              {{-- End Page buttons --}}
            </div>
          </div>
        </div>
        {{-- End Page buttons --}}

      </div>
    </div>
  </div>

  {{-- Page body --}}
  <div class="page-body">
    <div class="container-fluid">
      <div class="row justify-content-start g-2">


        <div class="col-12 col-md-7 col-lg-6 col-xl-5 col-xxl-4">
          <div class="card" style="height: 15rem">
            <div class="text-left card-header bg-blue-lt">
              <h2 class="col-12 m-1">{{ __($pretitle) ?? 'Empty' }} - {{ __($title) ?? 'Empty' }}</h2>
            </div>
            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
              <div class="divide-y">
                <div>
                  <div class="row">
                    {{-- content --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-7 col-lg-6 col-xl-4 col-xxl-4">
          <div class="card" style="height: 15rem">
            <div class="text-left card-header bg-blue-lt">
              <h2 class="col-12 m-1">{{ __($pretitle) ?? 'Empty' }} - {{ __($title) ?? 'Empty' }}</h2>
            </div>
            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
              <div class="divide-y">
                <div>
                  <div class="row">
                    {{-- content --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-7 col-lg-4 col-xl-3 col-xxl-5">
          <div class="card" style="height: 25rem">
            <div class="text-left card-header bg-blue-lt">
              <h2 class="col-12 m-1">{{ __($pretitle) ?? 'Empty' }} - {{ __($title) ?? 'Empty' }}</h2>
            </div>
            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
              <div class="divide-y">
                <div>
                  <div class="row">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam itaque iusto quia maxime dicta ut culpa qui cum velit laboriosam odit natus doloremque, illo at voluptatum vitae consequatur exercitationem dolor temporibus nihil. Quo nulla incidunt iusto, quia sequi dolorem eveniet. Velit soluta nostrum accusantium quibusdam quae! Perferendis laborum dicta labore quas, architecto, maxime magni sit dolore unde, iste amet! Illo culpa, accusantium at laborum dignissimos aut dicta numquam id ut delectus blanditiis sapiente sed laboriosam consequuntur et architecto amet atque eaque aperiam maxime. Corporis sint pariatur praesentium suscipit recusandae accusantium est atque delectus nesciunt rem reiciendis quis minima quas ut, eaque expedita. Doloribus temporibus reprehenderit, quam architecto unde nobis doloremque atque saepe necessitatibus eum reiciendis repellat repellendus! Quos impedit recusandae libero iure, iusto maxime natus tenetur ipsa repellat cum consequatur assumenda distinctio ut soluta veritatis quidem, est fugit eligendi quae nobis, quod quis corporis enim labore. Tempore, dolorem impedit nihil iure tenetur sit soluta itaque nostrum quidem, hic sunt sapiente perspiciatis, inventore quaerat. Quo aut laudantium doloribus, sed quaerat sunt accusamus, assumenda inventore quis nisi atque suscipit doloremque saepe consequatur amet! Eaque est suscipit adipisci, voluptatibus porro eligendi quaerat sequi quasi. Vel ut magni expedita provident veniam minus, qui laudantium iste cum reprehenderit praesentium est modi cumque incidunt, hic officiis exercitationem quisquam recusandae! Quaerat itaque incidunt dolorem dignissimos ab necessitatibus rerum voluptate quia id nemo voluptatem possimus labore placeat error et, debitis odit. Assumenda fugit animi necessitatibus voluptatibus, dolorum consequatur expedita velit fuga libero ipsam quod quidem quibusdam saepe dignissimos, pariatur possimus placeat dolores hic rerum! Dolor optio error vitae recusandae ratione sed porro voluptate amet. Iusto, fuga neque pariatur earum ducimus itaque dolorem tempore eum alias hic fugit cupiditate suscipit accusamus odit, aspernatur fugiat eligendi adipisci commodi. Quo dolore blanditiis optio numquam provident autem eveniet recusandae! Maiores excepturi velit ipsum accusantium enim iure ducimus quis? Vitae et iste accusantium nobis totam tempore molestias, dolorum quia hic dolorem doloremque. Qui, perspiciatis consectetur accusamus culpa natus eius repellat ratione, reprehenderit laudantium illo ipsum consequuntur aspernatur! Dolore voluptas numquam, suscipit voluptatibus minima voluptates deserunt repellat eaque a, perspiciatis ea. Sunt provident adipisci, distinctio amet explicabo esse eos exercitationem dolorem dolore. Atque, praesentium amet neque sunt explicabo ratione quae vel. Accusamus dolorem quis fugit. Culpa ducimus enim esse sapiente consequuntur necessitatibus totam assumenda dolor, non, minima cupiditate, in iste minus cumque magnam nulla ipsam dolorum sunt quaerat nesciunt quo deserunt quae numquam? Nisi velit veniam blanditiis rerum impedit doloribus commodi enim. Cupiditate modi asperiores illo assumenda eveniet. Sequi perferendis tempora quae repellendus eveniet saepe labore illum, quo aliquid earum facilis. Deserunt non neque autem in. Ipsam, quam vero? Optio sint rem blanditiis temporibus rerum corporis eius dignissimos voluptas deserunt quisquam eos vitae tenetur ea odio odit, labore similique aut numquam exercitationem! Aperiam tempore magni vitae qui eaque iusto, quaerat repellat ullam esse placeat et molestiae maxime suscipit vel sequi unde totam rerum quidem nobis? Sit, quae dolores perspiciatis neque minima illo libero veniam magnam mollitia accusantium iusto animi maiores, necessitatibus illum a reprehenderit molestias ad qui, eveniet suscipit placeat fuga? Commodi placeat odit corporis minima saepe ipsa laborum voluptas cum culpa at, nesciunt maxime cumque facilis consequuntur officiis, animi numquam dignissimos est odio eaque quas? Minus vitae ipsum molestias similique error laborum neque molestiae voluptatum atque nostrum animi, consectetur quis eaque repellendus nulla, magnam id fuga dolore corporis voluptates amet explicabo ab! Deleniti numquam quae ducimus incidunt. Sequi suscipit fugit reiciendis. Libero, officia ullam? Adipisci, dolor ducimus! Unde necessitatibus quo possimus recusandae ipsum nobis beatae quas? Voluptates, id delectus iusto voluptatibus asperiores quo quas quam culpa deserunt mollitia magnam. Corrupti possimus et inventore recusandae libero quis esse! Aspernatur nesciunt officiis ad eum molestias tempore maxime aut quia placeat molestiae perspiciatis, alias suscipit consequatur. Consequuntur distinctio modi repudiandae culpa animi laborum sint molestias repellat nobis nisi, ullam tempore debitis magni incidunt beatae non inventore dolore provident asperiores earum error. Modi cumque id nesciunt iure consequatur dolorum placeat magni, mollitia, provident tenetur voluptas atque impedit rem reiciendis in illo optio at nulla sapiente cum est ut minima consectetur? Error adipisci sint aperiam similique magnam quidem expedita perspiciatis recusandae pariatur id ab quo ipsa laboriosam aliquid libero dolorem dicta nesciunt, corporis odio, eos voluptate fugiat, repudiandae quaerat. Nulla sint culpa exercitationem incidunt voluptas laudantium neque quis, fuga nesciunt quasi! Perferendis non repellat illum, quibusdam repellendus consequuntur velit quasi esse fuga, sit molestias id vero ipsum eum minus tempora modi saepe recusandae eius placeat! Molestiae pariatur expedita quibusdam nemo eligendi reiciendis eaque ad hic blanditiis esse. Corrupti, cupiditate ducimus, aperiam nobis debitis sint accusamus numquam expedita voluptatum ipsa, modi ipsum perferendis laborum alias et natus adipisci veniam rem architecto ex non harum quaerat? Laboriosam corporis, iste aliquam incidunt ipsam fugit atque ducimus quibusdam saepe quidem impedit modi quaerat fuga vitae sit ab voluptatem nam nobis ratione nisi ullam libero eveniet. Minus, reiciendis pariatur eaque aliquam a sunt corrupti quam magnam illo harum ipsa molestias vel, modi repudiandae architecto cupiditate velit rem? Repudiandae libero quidem sit inventore voluptates repellendus debitis expedita, dignissimos ex temporibus ipsum aut laboriosam ullam, laudantium non consectetur quam, tenetur officia distinctio praesentium dolorum alias nemo. Molestiae illum veritatis, rerum tenetur modi, voluptas totam unde, tempore culpa doloribus ipsa quidem at quia et nesciunt libero expedita velit vel pariatur? Eum harum necessitatibus, voluptatibus perspiciatis at similique facere minus vitae dignissimos, ex assumenda iure. Saepe, recusandae rem eligendi iure fugit aliquam suscipit. Quo consequatur quae, porro possimus ad eos magni voluptas beatae repellendus a accusantium? Temporibus magnam obcaecati ullam. Doloremque quam, sint tenetur eos temporibus ex aperiam inventore laboriosam non autem dignissimos sequi at animi vel facere, atque dolore eaque libero fugiat aliquid expedita? Aspernatur quas ex obcaecati rem neque corrupti voluptatibus, numquam ipsam explicabo sed nam nemo voluptates dolor optio illo quis error eius consequuntur voluptas ut dolores omnis qui alias impedit. Repellat doloremque impedit beatae quae debitis quia repudiandae commodi culpa explicabo temporibus ratione ipsam reiciendis error tempore nostrum iusto quo molestiae dolorem aperiam laborum reprehenderit, perferendis dolores blanditiis. Architecto illum voluptatibus eaque perferendis.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-7 col-lg-4 col-xl-3 col-xxl-5">
          <div class="card" style="height: 25rem">
            <div class="text-left card-header bg-blue-lt">
              <h2 class="col-12 m-1">{{ __($pretitle) ?? 'Empty' }} - {{ __($title) ?? 'Empty' }}</h2>
            </div>
            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
              <div class="divide-y">
                <div>
                  <div class="row">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam itaque iusto quia maxime dicta ut culpa qui cum velit laboriosam odit natus doloremque, illo at voluptatum vitae consequatur exercitationem dolor temporibus nihil. Quo nulla incidunt iusto, quia sequi dolorem eveniet. Velit soluta nostrum accusantium quibusdam quae! Perferendis laborum dicta labore quas, architecto, maxime magni sit dolore unde, iste amet! Illo culpa, accusantium at laborum dignissimos aut dicta numquam id ut delectus blanditiis sapiente sed laboriosam consequuntur et architecto amet atque eaque aperiam maxime. Corporis sint pariatur praesentium suscipit recusandae accusantium est atque delectus nesciunt rem reiciendis quis minima quas ut, eaque expedita. Doloribus temporibus reprehenderit, quam architecto unde nobis doloremque atque saepe necessitatibus eum reiciendis repellat repellendus! Quos impedit recusandae libero iure, iusto maxime natus tenetur ipsa repellat cum consequatur assumenda distinctio ut soluta veritatis quidem, est fugit eligendi quae nobis, quod quis corporis enim labore. Tempore, dolorem impedit nihil iure tenetur sit soluta itaque nostrum quidem, hic sunt sapiente perspiciatis, inventore quaerat. Quo aut laudantium doloribus, sed quaerat sunt accusamus, assumenda inventore quis nisi atque suscipit doloremque saepe consequatur amet! Eaque est suscipit adipisci, voluptatibus porro eligendi quaerat sequi quasi. Vel ut magni expedita provident veniam minus, qui laudantium iste cum reprehenderit praesentium est modi cumque incidunt, hic officiis exercitationem quisquam recusandae! Quaerat itaque incidunt dolorem dignissimos ab necessitatibus rerum voluptate quia id nemo voluptatem possimus labore placeat error et, debitis odit. Assumenda fugit animi necessitatibus voluptatibus, dolorum consequatur expedita velit fuga libero ipsam quod quidem quibusdam saepe dignissimos, pariatur possimus placeat dolores hic rerum! Dolor optio error vitae recusandae ratione sed porro voluptate amet. Iusto, fuga neque pariatur earum ducimus itaque dolorem tempore eum alias hic fugit cupiditate suscipit accusamus odit, aspernatur fugiat eligendi adipisci commodi. Quo dolore blanditiis optio numquam provident autem eveniet recusandae! Maiores excepturi velit ipsum accusantium enim iure ducimus quis? Vitae et iste accusantium nobis totam tempore molestias, dolorum quia hic dolorem doloremque. Qui, perspiciatis consectetur accusamus culpa natus eius repellat ratione, reprehenderit laudantium illo ipsum consequuntur aspernatur! Dolore voluptas numquam, suscipit voluptatibus minima voluptates deserunt repellat eaque a, perspiciatis ea. Sunt provident adipisci, distinctio amet explicabo esse eos exercitationem dolorem dolore. Atque, praesentium amet neque sunt explicabo ratione quae vel. Accusamus dolorem quis fugit. Culpa ducimus enim esse sapiente consequuntur necessitatibus totam assumenda dolor, non, minima cupiditate, in iste minus cumque magnam nulla ipsam dolorum sunt quaerat nesciunt quo deserunt quae numquam? Nisi velit veniam blanditiis rerum impedit doloribus commodi enim. Cupiditate modi asperiores illo assumenda eveniet. Sequi perferendis tempora quae repellendus eveniet saepe labore illum, quo aliquid earum facilis. Deserunt non neque autem in. Ipsam, quam vero? Optio sint rem blanditiis temporibus rerum corporis eius dignissimos voluptas deserunt quisquam eos vitae tenetur ea odio odit, labore similique aut numquam exercitationem! Aperiam tempore magni vitae qui eaque iusto, quaerat repellat ullam esse placeat et molestiae maxime suscipit vel sequi unde totam rerum quidem nobis? Sit, quae dolores perspiciatis neque minima illo libero veniam magnam mollitia accusantium iusto animi maiores, necessitatibus illum a reprehenderit molestias ad qui, eveniet suscipit placeat fuga? Commodi placeat odit corporis minima saepe ipsa laborum voluptas cum culpa at, nesciunt maxime cumque facilis consequuntur officiis, animi numquam dignissimos est odio eaque quas? Minus vitae ipsum molestias similique error laborum neque molestiae voluptatum atque nostrum animi, consectetur quis eaque repellendus nulla, magnam id fuga dolore corporis voluptates amet explicabo ab! Deleniti numquam quae ducimus incidunt. Sequi suscipit fugit reiciendis. Libero, officia ullam? Adipisci, dolor ducimus! Unde necessitatibus quo possimus recusandae ipsum nobis beatae quas? Voluptates, id delectus iusto voluptatibus asperiores quo quas quam culpa deserunt mollitia magnam. Corrupti possimus et inventore recusandae libero quis esse! Aspernatur nesciunt officiis ad eum molestias tempore maxime aut quia placeat molestiae perspiciatis, alias suscipit consequatur. Consequuntur distinctio modi repudiandae culpa animi laborum sint molestias repellat nobis nisi, ullam tempore debitis magni incidunt beatae non inventore dolore provident asperiores earum error. Modi cumque id nesciunt iure consequatur dolorum placeat magni, mollitia, provident tenetur voluptas atque impedit rem reiciendis in illo optio at nulla sapiente cum est ut minima consectetur? Error adipisci sint aperiam similique magnam quidem expedita perspiciatis recusandae pariatur id ab quo ipsa laboriosam aliquid libero dolorem dicta nesciunt, corporis odio, eos voluptate fugiat, repudiandae quaerat. Nulla sint culpa exercitationem incidunt voluptas laudantium neque quis, fuga nesciunt quasi! Perferendis non repellat illum, quibusdam repellendus consequuntur velit quasi esse fuga, sit molestias id vero ipsum eum minus tempora modi saepe recusandae eius placeat! Molestiae pariatur expedita quibusdam nemo eligendi reiciendis eaque ad hic blanditiis esse. Corrupti, cupiditate ducimus, aperiam nobis debitis sint accusamus numquam expedita voluptatum ipsa, modi ipsum perferendis laborum alias et natus adipisci veniam rem architecto ex non harum quaerat? Laboriosam corporis, iste aliquam incidunt ipsam fugit atque ducimus quibusdam saepe quidem impedit modi quaerat fuga vitae sit ab voluptatem nam nobis ratione nisi ullam libero eveniet. Minus, reiciendis pariatur eaque aliquam a sunt corrupti quam magnam illo harum ipsa molestias vel, modi repudiandae architecto cupiditate velit rem? Repudiandae libero quidem sit inventore voluptates repellendus debitis expedita, dignissimos ex temporibus ipsum aut laboriosam ullam, laudantium non consectetur quam, tenetur officia distinctio praesentium dolorum alias nemo. Molestiae illum veritatis, rerum tenetur modi, voluptas totam unde, tempore culpa doloribus ipsa quidem at quia et nesciunt libero expedita velit vel pariatur? Eum harum necessitatibus, voluptatibus perspiciatis at similique facere minus vitae dignissimos, ex assumenda iure. Saepe, recusandae rem eligendi iure fugit aliquam suscipit. Quo consequatur quae, porro possimus ad eos magni voluptas beatae repellendus a accusantium? Temporibus magnam obcaecati ullam. Doloremque quam, sint tenetur eos temporibus ex aperiam inventore laboriosam non autem dignissimos sequi at animi vel facere, atque dolore eaque libero fugiat aliquid expedita? Aspernatur quas ex obcaecati rem neque corrupti voluptatibus, numquam ipsam explicabo sed nam nemo voluptates dolor optio illo quis error eius consequuntur voluptas ut dolores omnis qui alias impedit. Repellat doloremque impedit beatae quae debitis quia repudiandae commodi culpa explicabo temporibus ratione ipsam reiciendis error tempore nostrum iusto quo molestiae dolorem aperiam laborum reprehenderit, perferendis dolores blanditiis. Architecto illum voluptatibus eaque perferendis.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-7 col-lg-4 col-xl-3 col-xxl-5">
          <div class="card" style="height: 25rem">
            <div class="text-left card-header bg-blue-lt">
              <h2 class="col-12 m-1">{{ __($pretitle) ?? 'Empty' }} - {{ __($title) ?? 'Empty' }}</h2>
            </div>
            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
              <div class="divide-y">
                <div>
                  <div class="row">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam itaque iusto quia maxime dicta ut culpa qui cum velit laboriosam odit natus doloremque, illo at voluptatum vitae consequatur exercitationem dolor temporibus nihil. Quo nulla incidunt iusto, quia sequi dolorem eveniet. Velit soluta nostrum accusantium quibusdam quae! Perferendis laborum dicta labore quas, architecto, maxime magni sit dolore unde, iste amet! Illo culpa, accusantium at laborum dignissimos aut dicta numquam id ut delectus blanditiis sapiente sed laboriosam consequuntur et architecto amet atque eaque aperiam maxime. Corporis sint pariatur praesentium suscipit recusandae accusantium est atque delectus nesciunt rem reiciendis quis minima quas ut, eaque expedita. Doloribus temporibus reprehenderit, quam architecto unde nobis doloremque atque saepe necessitatibus eum reiciendis repellat repellendus! Quos impedit recusandae libero iure, iusto maxime natus tenetur ipsa repellat cum consequatur assumenda distinctio ut soluta veritatis quidem, est fugit eligendi quae nobis, quod quis corporis enim labore. Tempore, dolorem impedit nihil iure tenetur sit soluta itaque nostrum quidem, hic sunt sapiente perspiciatis, inventore quaerat. Quo aut laudantium doloribus, sed quaerat sunt accusamus, assumenda inventore quis nisi atque suscipit doloremque saepe consequatur amet! Eaque est suscipit adipisci, voluptatibus porro eligendi quaerat sequi quasi. Vel ut magni expedita provident veniam minus, qui laudantium iste cum reprehenderit praesentium est modi cumque incidunt, hic officiis exercitationem quisquam recusandae! Quaerat itaque incidunt dolorem dignissimos ab necessitatibus rerum voluptate quia id nemo voluptatem possimus labore placeat error et, debitis odit. Assumenda fugit animi necessitatibus voluptatibus, dolorum consequatur expedita velit fuga libero ipsam quod quidem quibusdam saepe dignissimos, pariatur possimus placeat dolores hic rerum! Dolor optio error vitae recusandae ratione sed porro voluptate amet. Iusto, fuga neque pariatur earum ducimus itaque dolorem tempore eum alias hic fugit cupiditate suscipit accusamus odit, aspernatur fugiat eligendi adipisci commodi. Quo dolore blanditiis optio numquam provident autem eveniet recusandae! Maiores excepturi velit ipsum accusantium enim iure ducimus quis? Vitae et iste accusantium nobis totam tempore molestias, dolorum quia hic dolorem doloremque. Qui, perspiciatis consectetur accusamus culpa natus eius repellat ratione, reprehenderit laudantium illo ipsum consequuntur aspernatur! Dolore voluptas numquam, suscipit voluptatibus minima voluptates deserunt repellat eaque a, perspiciatis ea. Sunt provident adipisci, distinctio amet explicabo esse eos exercitationem dolorem dolore. Atque, praesentium amet neque sunt explicabo ratione quae vel. Accusamus dolorem quis fugit. Culpa ducimus enim esse sapiente consequuntur necessitatibus totam assumenda dolor, non, minima cupiditate, in iste minus cumque magnam nulla ipsam dolorum sunt quaerat nesciunt quo deserunt quae numquam? Nisi velit veniam blanditiis rerum impedit doloribus commodi enim. Cupiditate modi asperiores illo assumenda eveniet. Sequi perferendis tempora quae repellendus eveniet saepe labore illum, quo aliquid earum facilis. Deserunt non neque autem in. Ipsam, quam vero? Optio sint rem blanditiis temporibus rerum corporis eius dignissimos voluptas deserunt quisquam eos vitae tenetur ea odio odit, labore similique aut numquam exercitationem! Aperiam tempore magni vitae qui eaque iusto, quaerat repellat ullam esse placeat et molestiae maxime suscipit vel sequi unde totam rerum quidem nobis? Sit, quae dolores perspiciatis neque minima illo libero veniam magnam mollitia accusantium iusto animi maiores, necessitatibus illum a reprehenderit molestias ad qui, eveniet suscipit placeat fuga? Commodi placeat odit corporis minima saepe ipsa laborum voluptas cum culpa at, nesciunt maxime cumque facilis consequuntur officiis, animi numquam dignissimos est odio eaque quas? Minus vitae ipsum molestias similique error laborum neque molestiae voluptatum atque nostrum animi, consectetur quis eaque repellendus nulla, magnam id fuga dolore corporis voluptates amet explicabo ab! Deleniti numquam quae ducimus incidunt. Sequi suscipit fugit reiciendis. Libero, officia ullam? Adipisci, dolor ducimus! Unde necessitatibus quo possimus recusandae ipsum nobis beatae quas? Voluptates, id delectus iusto voluptatibus asperiores quo quas quam culpa deserunt mollitia magnam. Corrupti possimus et inventore recusandae libero quis esse! Aspernatur nesciunt officiis ad eum molestias tempore maxime aut quia placeat molestiae perspiciatis, alias suscipit consequatur. Consequuntur distinctio modi repudiandae culpa animi laborum sint molestias repellat nobis nisi, ullam tempore debitis magni incidunt beatae non inventore dolore provident asperiores earum error. Modi cumque id nesciunt iure consequatur dolorum placeat magni, mollitia, provident tenetur voluptas atque impedit rem reiciendis in illo optio at nulla sapiente cum est ut minima consectetur? Error adipisci sint aperiam similique magnam quidem expedita perspiciatis recusandae pariatur id ab quo ipsa laboriosam aliquid libero dolorem dicta nesciunt, corporis odio, eos voluptate fugiat, repudiandae quaerat. Nulla sint culpa exercitationem incidunt voluptas laudantium neque quis, fuga nesciunt quasi! Perferendis non repellat illum, quibusdam repellendus consequuntur velit quasi esse fuga, sit molestias id vero ipsum eum minus tempora modi saepe recusandae eius placeat! Molestiae pariatur expedita quibusdam nemo eligendi reiciendis eaque ad hic blanditiis esse. Corrupti, cupiditate ducimus, aperiam nobis debitis sint accusamus numquam expedita voluptatum ipsa, modi ipsum perferendis laborum alias et natus adipisci veniam rem architecto ex non harum quaerat? Laboriosam corporis, iste aliquam incidunt ipsam fugit atque ducimus quibusdam saepe quidem impedit modi quaerat fuga vitae sit ab voluptatem nam nobis ratione nisi ullam libero eveniet. Minus, reiciendis pariatur eaque aliquam a sunt corrupti quam magnam illo harum ipsa molestias vel, modi repudiandae architecto cupiditate velit rem? Repudiandae libero quidem sit inventore voluptates repellendus debitis expedita, dignissimos ex temporibus ipsum aut laboriosam ullam, laudantium non consectetur quam, tenetur officia distinctio praesentium dolorum alias nemo. Molestiae illum veritatis, rerum tenetur modi, voluptas totam unde, tempore culpa doloribus ipsa quidem at quia et nesciunt libero expedita velit vel pariatur? Eum harum necessitatibus, voluptatibus perspiciatis at similique facere minus vitae dignissimos, ex assumenda iure. Saepe, recusandae rem eligendi iure fugit aliquam suscipit. Quo consequatur quae, porro possimus ad eos magni voluptas beatae repellendus a accusantium? Temporibus magnam obcaecati ullam. Doloremque quam, sint tenetur eos temporibus ex aperiam inventore laboriosam non autem dignissimos sequi at animi vel facere, atque dolore eaque libero fugiat aliquid expedita? Aspernatur quas ex obcaecati rem neque corrupti voluptatibus, numquam ipsam explicabo sed nam nemo voluptates dolor optio illo quis error eius consequuntur voluptas ut dolores omnis qui alias impedit. Repellat doloremque impedit beatae quae debitis quia repudiandae commodi culpa explicabo temporibus ratione ipsam reiciendis error tempore nostrum iusto quo molestiae dolorem aperiam laborum reprehenderit, perferendis dolores blanditiis. Architecto illum voluptatibus eaque perferendis.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  {{-- End Page body --}}

</div>
<!-- Wrapper End -->
@endsection

@section('modals')
{{-- Success Modal --}}
<div class="modal fade" id="modal-success" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content shadow-lg">
      <div class="modal-status bg-success"></div>
      <div class="modal-body py-4 text-center">
        <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
        <svg class="icon text-green icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <circle cx="12" cy="12" r="9" />
          <path d="M9 12l2 2l4 -4" />
        </svg>
        <h3>Payment succedeed</h3>
        <div class="text-muted">Your payment of $290 has been successfully submitted. Your invoice has been sent to support@tabler.io.</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><a class="btn w-100" data-bs-dismiss="modal" href="#">
                Go to dashboard
              </a></div>
            <div class="col"><a class="btn btn-success w-100" data-bs-dismiss="modal" href="#">
                View invoice
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Warning Modal --}}
<div class="modal fade" id="modal-warning" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content shadow-lg">
      <div class="modal-status bg-warning"></div>
      <div class="modal-body py-4 text-center">
        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
        <svg class="icon text-warning icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 9v2m0 4v.01" />
          <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
        </svg>
        <h3>Are you sure?</h3>
        <div class="text-muted">Do you really want to remove 84 files? What you've done cannot be undone.</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><a class="btn w-100" data-bs-dismiss="modal" href="#">
                Cancel
              </a></div>
            <div class="col"><a class="btn btn-warning w-100" data-bs-dismiss="modal" href="#">
                Ok
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Danger Modal --}}
<div class="modal fade" id="modal-danger" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content shadow-lg">
      <div class="modal-status bg-danger"></div>
      <div class="modal-body py-4 text-center">
        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
        <svg class="icon text-danger icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 9v2m0 4v.01" />
          <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
        </svg>
        <h3>Are you sure?</h3>
        <div class="text-muted">Do you really want to remove 84 files? What you've done cannot be undone.</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><a class="btn w-100" data-bs-dismiss="modal" href="#">
                Cancel
              </a></div>
            <div class="col"><a class="btn btn-danger w-100" data-bs-dismiss="modal" href="#">
                Delete 84 items
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
