<style>
    /* Hamburger Menu */
    .hamburger-menu {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between; /* Aligns the menu to one side */
        padding: 0 20px; /* Gives some space on the sides */
        height: 60px;
        background-color: #C7CEE5; /* darker background */
    }

    #menu__toggle {
        display: none;
    }

    .menu__btn {
        position: relative;
        display: inline-block;
        width: 30px;
        height: 20px;
        cursor: pointer;
    }

    .menu__btn span,
    .menu__btn span:before,
    .menu__btn span:after {
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #fff; /* light colored bars */
        transition: transform 0.3s ease-in-out;
    }

    .menu__btn span:before,
    .menu__btn span:after {
        content: '';
    }

    .menu__btn span:before {
        top: -6px;
    }

    .menu__btn span:after {
        top: 6px;
    }

    #menu__toggle:checked + .menu__btn span {
        transform: rotate(45deg);
    }

    #menu__toggle:checked + .menu__btn span:before,
    #menu__toggle:checked + .menu__btn span:after {
        top: 0;
        transform: rotate(90deg);
    }

    .menu__box {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #C7CEE5; /* darker background */
        visibility: hidden; /* Initially hides the menu */
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        list-style-type: none;
        
    }

    #menu__toggle:checked ~ .menu__box {
        display: block;
        visibility: visible; /* Shows the menu when the button is checked */
        opacity: 1;
    }

    .menu__item {
        display: block;
        padding: 15px 20px;
        color: #fff; /* Light colored text */
        font-size: 16px;
        text-decoration: none;
        transition: background-color 0.3s ease-in-out;
    }

    .menu__item:hover {
        background-color: #C7CEE5; /* Darker hover background */
    } 


</style>


<nav class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
        <span></span>
    </label>

    <ul class="menu__box">
        <li><a class="menu__item" href="index.php">Home</a></li>
        <li><a class="menu__item" href="addC.php">Lay out garments</a></li>
        <li><a class="menu__item" href="addS.php">Create seller</a></li>
        <li><a class="menu__item" href="clothes.php">Clothes</a></li>
        <li><a class="menu__item" href="sellers.php">Seller</a></li>
        
    </ul>
</nav>
