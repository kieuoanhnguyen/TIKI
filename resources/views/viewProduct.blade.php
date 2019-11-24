<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    .myAnimation {
    display: inline-block;
    border: 1px solid dark;
    background-color: yellow;
}

.myImages {
    display: inline-block;
    width: 50px;
    height: 50px;
    border: 1px solid dark;
    background-color: green;
}
    </style>
    <link rel="stylesheet" href="style.css" class="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="">
        <div class="d-flex flex-row">
            <div class="col-3">
            <img id="myAnimation" src="images/{{$product->image}}" alt="" class="myAnimation">
            </div>
            <div class="col-9">
                <div class="">
                <h2>{{$product->name}}</h2>
                </div>
                <div class="">
                <p>{{$product->price}}</p>
                </div>
                <div class="">
                <p>{{$product->description}}</p>
                </div>
            </div>
        </div>
        <div class="">
            <span class="">
            <img id="01" src="images/images.jpg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
            <span class="">
            <img id="02" src="images/images1.jpeg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
            <span class="">
            <img id="03" src="images/images2.jpeg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
            <span class="">
            <img id="04" src="images/images3.jpeg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
            <span class="">
            <img id="05" src="images/images4.jpeg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
            <span class="">
            <img id="06" src="images/images6.jpeg" alt="" class="myImages" onclick="showImages(this.id)">
            </span>
        </div>
    </div>



    <div class="thongtinchitiet">
        <h5></h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tac Gia</th>
                <td>{{$product->auther}}</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">NXB</th>
                <td>{{$product->publishing}}</td>
                </tr>
                <tr>
                    <th scope="col">MaKD</th>
                <td>{{$product->seller->businness_code}}</td>
                </tr>
                <tr>
                    <th scope="col">Luu Y</th>
                    <td>
                        @if($product->count === 0)
                        @php
                        echo('San Pham Het Hang')
                        @endphp
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mota">
        <h5>Mo Ta San Pham</h5>
        <table class="table">
            <tr>
                <td>{{$product->content}}</td>
            </tr>
        </table>
    </div>
    <div class="binhluan">
        <h5>Binh Luan</h5>
        <div class="well">
            <h4>Viết bình luận ...<span><i class="fas fa-pencil-alt fa-xs"></i></span></h4>
            <form class="form">
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>

    <div class="hien thi binh luan danh gia">
    </div>
    <div class="sanphamlienquan">
        <h5>San Pham Lien Quan</h5>
        <div class="d-flex flex-row mt-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">prince</p>
                    <a href="#" class="btn btn-primary">Add Card</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">prince</p>
                    <a href="#" class="btn btn-primary">Add Card</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">prince</p>
                    <a href="#" class="btn btn-primary">Add Card</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">prince</p>
                    <a href="#" class="btn btn-primary">Add Card</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">prince</p>
                    <a href="#" class="btn btn-primary">Add Card</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const images = ['01', '02', '03', '04', '05', '06'];
        let key;

        function showImages(id) {
            const element = document.getElementById(id);
            document.getElementById("myAnimation").setAttribute('src', element.src);
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>