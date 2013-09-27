<div class="wrapper">
    <div class="width-res">
        <h2>Show off</h2>

        <div class="gallery">
            <div class="a">
                <img src="images/works/a1.png" alt="a1"/>
                <img src="images/works/a2.png" alt="a2"/>
                <img src="images/works/a3.png" alt="a3"/>
                <img src="images/works/a4.png" alt="a4"/>
                <img src="images/works/a5.png" alt="a5"/>
            </div>
            <div class="b">
                <img src="images/works/b1.png" alt="b1"/>
                <img src="images/works/b2.png" alt="b2"/>
                <img src="images/works/b3.png" alt="b3"/>
            </div>
            <div class="c">
                <img src="images/works/c1.png" alt="c1"/>
                <img src="images/works/c2.png" alt="c2"/>
            </div>
            <div class="d">
                <img src="images/works/d1.png" alt="d1"/>
                <img src="images/works/d2.png" alt="d2"/>
            </div>
            <div class="e">
                <img src="images/works/e1.png" alt="e1"/>
                <img src="images/works/e2.png" alt="e2"/>
                <img src="images/works/e3.png" alt="e3"/>
            </div>
        </div>
    </div>
</div>
<script src="scripts/zepto.min.js" type="text/javascript" charset="utf-8"></script>
<script src="scripts/flux.min.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function () {
        if (!flux.browser.supportsTransitions)
            alert("Flux Slider requires a browser that supports CSS3 transitions");

        window.f = new flux.slider('.gallery .a', {
            pagination: false
        });
        window.f = new flux.slider('.gallery .b', {
            pagination: false
        });
        window.f = new flux.slider('.gallery .c', {
            pagination: false
        });
        window.f = new flux.slider('.gallery .d', {
            pagination: false
        });
        window.f = new flux.slider('.gallery .e', {
            pagination: false
        });
    });
</script>