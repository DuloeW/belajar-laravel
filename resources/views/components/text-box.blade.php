<div class="box-list">
    <a href="profile/{{ $attributes['number'] }}">
        <h1>{{ $attributes['number'] }}</h1>
    </a>
    <h2 class="text-box">User</h2>
</div>

<style>
    .box-list {
        width: 400px;
        height: 500px;
        padding: 20px;
        margin: 20px;
        display: grid;
        place-items: center;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0px 6px 20px rgb(214, 214, 214);
        text-align: center;
        overflow: hidden;
        transition: 0.3s ease-in-out;
    }

    .text-box {
        font-size: 50px;
        font-weight: bolder;
        position: relative;
        opacity: 0;
        transition: 0.3s ease-in-out;
        transform: translateY(400px)
    }

    .box-list:hover .text-box {
        opacity: 1;
        transform: translateY(70px);
    }

    .box-list:hover {
        background: #4ff4de;
    }

    .box-list:hover a {
        background: #fff;
        color: #3b3b3b;
    }

    .box-list:hover .text-box {
        color: #fff;
        letter-spacing: 5px;
    }

    .box-list a {
        text-decoration: none;
        color: #ffffff;
        padding: 30px 50px;
        background: #4ff4de;
        box-shadow: 0px 6px 20px rgba(124, 124, 124, 0.467),
                    inset 0px -6px 20px rgba(165, 165, 165, 0.7);
        border-radius: 20px
    }

    .box-list h1 {
        font-size: 40px;
    }
</style>
