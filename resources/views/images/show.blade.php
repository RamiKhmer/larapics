<x-layout title="{{$image->title}}">
<div class="row">
    <div class="col-md-9">
        <div class="image-container">
            <img src="{{$image->fileUrl()}}" class="img-fluid" alt="{{$image->title}}" />
        </div>

        <h3 class="mt-5">Related Photos</h3>
        <div class="row mt-3">
            <div class="col">
                <a href="#"><img src="images/img3.jpeg" class="img-fluid" /></a>
            </div>
            <div class="col">
                <a href="#"><img src="images/img4.jpeg" class="img-fluid" /></a>
            </div>
            <div class="col">
                <a href="#"><img src="images/img5.jpeg" class="img-fluid" /></a>
            </div>
        </div>

        <div class="mt-5">
            <div class="d-flex mt-4">
                <div class="flex-shrink-0">
                    <img src="https://via.placeholder.com/64x64" class="rounded-circle mr-3" alt="...">
                </div>
                <div class="flex-grow-1 ms-3">
                    <textarea rows="3" placeholder="Write comment here" class="form-control mb-1"></textarea>
                    <button class="btn btn-primary mt-1">Send</button>
                </div>
            </div>
            <div class="d-flex mt-4">
                <div class="flex-shrink-0">
                    <img src="https://via.placeholder.com/64x64" class="rounded-circle mr-3" alt="...">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="">Jhon doe <small class="text-muted pl-2">2 days ago</small></h5>
                    <div>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                        faucibus.
                    </div>
                </div>
            </div>
            <div class="d-flex mt-4">
                <div class="flex-shrink-0">
                    <img src="https://via.placeholder.com/64x64" class="rounded-circle mr-3" alt="...">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="">Jane doe <small class="text-muted pl-2">3 days ago</small></h5>
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora necessitatibus
                        explicabo sapiente adipisci labore rem deleniti odio exercitationem vel, eligendi itaque
                        eveniet soluta id nisi totam, blanditiis dolorum ratione. Alias?
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <h5>{{ $image->title}}</h5>
        <div class="d-flex align-items-center mb-3">
            <img src="https://www.gravatar.com/avatar/c1d58af78e2086e8348f0f3b70425b25?d=mp&amp;s=60"
                alt="Author" class="rounded-circle mr-3">
            <div class="ms-3">
                <h5><a href="#" class="text-decoration-none">John Doe</a></h5>
                <p class="text-muted mb-0">5 photos</p>
            </div>
        </div>

        <div class="d-flex justify-content-between py-3 border-top border-bottom">

            <div>
                <button type="button" title="Like mage" class="btn btn-primary">
                    <x-icon src="thumbs-up.svg" alt="" class="align-text-top" width="18" height="18"/> 150
                </button>

                <button type="button" title="Favorite mage" class="btn btn-danger">
                    <x-icon src="heart.svg" alt="" width="18" height="18"/>
                </button>
            </div>

            <button title="Download" class="btn btn-success d-flex align-items-center">
                <x-icon src="download.svg" alt="" class="align-text-top" width="18" height="18"/>
                <span class="display-block ms-2">Download</span>
            </button>
        </div>

        <div class="bg-light mt-3 p-3 border">
            <table width="100%">
                <tbody>
                    <tr>
                        <th>Uploaded</th>
                        <td>{{$ddd}}</td>
                    </tr>
                    <tr>
                        <th>Dimensions</th>
                        <td>{{$image->dimension}}</td>
                    </tr>
                    <tr>
                        <th>Views</th>
                        <td>{{$image->views_count}}</td>
                    </tr>
                    <tr>
                        <th>Downloads</th>
                        <td>{{$image->downloads_count}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="tagcloud mt-3">
            <ul>
                <li><a href="#">Nature</a></li>
                <li><a href="#">Mountain</a></li>
                <li><a href="#">Blue</a></li>
                <li><a href="#">Forest</a></li>
                <li><a href="#">Animal</a></li>
            </ul>
        </div>
    </div>
</div>
</x-layout>


