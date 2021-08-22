
<div class="table-responsive">
    <table class="table" id="myTable">
        <thead class="">

        <th  class="text-center" >

        </th>

        <th >

            Product

        </th>

        <th >

            Color

        </th>

        <th >

            Size

        </th>

        <th  class="text-right" >

            Price

        </th>

        <th  class="text-right" >

            Qty

        </th>

        <th  class="text-right" >

            Amount

        </th>


        </thead>
        <tbody>



        @forelse($banners as $banner)


            <tr>
                <td>
                    <div class="img-container">
                        <img src="../assets/img/saint-laurent.jpg" alt="...">
                    </div>
                </td>
                <td class="td-name">

                {{$loop->iteration}}
                <td>
                    {{$banner->title}}
                </td>
                <td>
                    {{$banner->slug}}
                </td>
                <td>
                  <img src="{{$banner->photo}}" style="max-height: 190px; max-width: 120px">
                </td>
                <td class="td-number">

                    {{Substr(strip_tags($banner->description), 0, 10)}} {{strlen(strip_tags($banner->description)) > 15 ? "......" : ""}}
                </td>
                <td class="td-number">
                    {{$banner->condition}}
                </td>
                <td class="td-number">
                    {{$banner->status}}
                </td>

            </tr>
        @empty
            <p class="text-center danger"></p>
        @endforelse
        </tbody>
    </table>
</div>
