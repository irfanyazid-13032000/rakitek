@extends('layouts.main')

@section('container')
<style>
    .container,
    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
        padding-right: 0;
        padding-left: 0;
    }


    *,
    ::after,
    ::before {
        box-sizing: unset;
    }

    ::-webkit-scrollbar {
        width: 5px;
        height: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .container {
        width: 1040px;
        margin: 50px auto;
        border: 5px rgb(122, 215, 56) solid;
        background-color: rgb(63, 107, 218);
        /* height: 900px; */
    }

    .header #fibonacci {
        /* background-color: aqua; */
        /* border: none */
        width: 200px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        /* background-position: 10px 10px; */
        background-repeat: no-repeat;
        padding: 5px 5px 5px 5px;
        margin: 10px;
        transition: width 0.4s ease-in-out;
    }

    .header #fibonacci:focus {
        width: 50%;
    }


    #content #fibonaci1 {
        /* flex-wrap: nowrap; */
        width: 1040px;
        /* border: 5px black solid; */
        /* height: 900px; */
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }

    #fibonaci1 div {
        width: 100px;
        height: 100px;
        background-color: rgb(125, 24, 76);
        /* border: 2px solid black; */
        margin: 2px;
        text-align: center;
        /* display: flex; */
        overflow: auto;
        color: #ccc;
        /* text-align: center; */
        line-height: 100px;
        transition: .3s;
    }

    #fibonaci1 div:hover {
        transform: scale(1.12);
        box-shadow: 10px 10px rgba(58, 32, 17, 0.5);
    }

    #fibonaci1 span {
        margin: auto;
    }

    #input {
        text-align: center;
    }
</style>
</head>

<body>

    <div class="container">

        <div class="header">

            <div id="input">
                <input type="number" id="fibonacci" placeholder="'/' for focus">
            </div>
        </div>

        <div id="content">

            <div id="fibonaci1">

                <!-- <div></div> -->

            </div>


        </div>

        <div id="percobaan">

        </div>

    </div>
</body>

<script>
    const fibonacci = document.querySelector("#fibonacci");

    // console.log(document.body);
    // const body = document.body;
    document.addEventListener("keyup", function(event) {
        if (event.keyCode === 191) {
            document.querySelector("#fibonacci").focus();
        }

        // alert("hai");

    })

    fibonacci.addEventListener("keyup", function(event) {


        if (event.keyCode === 13) {
            document.querySelector("#fibonaci1").innerHTML = "";

            let params = document.querySelector("#fibonacci").value;

            let f_n1 = 1;
            let f_n2 = 0;
            let fibonacci = [];
            console.log(f_n1);
            let fibon1 = document.createElement("div");
            let fib1 = document.createTextNode(f_n1);
            let tempatfibon = document.querySelector("#fibonaci1");
            fibon1.appendChild(fib1);
            // let fiben = document.createElement("div");
            // fiben.appendChild(fibon1);
            tempatfibon.appendChild(fibon1);
            for (let i = 0; i < params - 1; i++) {
                let f_n = f_n1 + f_n2;
                f_n2 = f_n1;
                f_n1 = f_n;
                console.log(f_n);
                let fibon = document.createElement("div");
                let fib = document.createTextNode(f_n);
                fibon.appendChild(fib);
                // fiben.appendChild(fibon1);
                tempatfibon.appendChild(fibon);

                // let percobaan = document.querySelector("#percobaan");
                // let h5 = `<div>${f_n}</div>`;
                // percobaan.innerHTML = h5;




            }
            // console.log("lalal")

            // }
        }
    })
</script>


@endsection
