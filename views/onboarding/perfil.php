<?php include('style.css') ?>
<div class="container">
    <h1>Guided tour tooltip</h1>
    <span class="close"></span>

    <div class="slider-container">
        <div class="slider-turn">
            <p>
                Guided tour tooltip inspired by Jonathan Moreira
            </p>

            <p>
                Dribbble shot visible at
                <a href="http://dribbble.com/shots/1216346-Guided-tour-tooltip" title="Dribbble shot"
                    target="_blank">this link</a>
            </p>

            <p>
                Codepen by Yoann Helin
            </p>

            <p>
                <a href="https://twitter.com/YoannHELIN" title="Twitter" target="_blank">Twitter : @YoannHELIN</a>

            </p>

            <p>Thank you !</p>
        </div>
    </div>

    <div class="bottom">
        <div class="step">
            <span></span>
            <ul>
                <li data-num="1"></li>
                <li data-num="2"></li>
                <li data-num="3"></li>
                <li data-num="4"></li>
                <li data-num="5"></li>
            </ul>
        </div>
        <button class="btn">Next</button>
    </div>
</div>
<button class="open">Open</button>

<?php include('javascript.js') ?>