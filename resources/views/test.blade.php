<style>
    @import url('https://fonts.googleapis.com/css?family=Inconsolata');

    * {
        font-family: "Inconsolata", monospace;
        color: white;
    }

    a {
        text-decoration: none;
    }

    .button,
    a {
        width: 12em;
        height: 1em;
        padding: 1em;
        background-color: salmon;
        cursor: pointer;
        position: relative;
        bottom: 0px;
        right: 0px;
        box-shadow: 8px 8px 0px red;
        text-align: center;
        transition: all .25s;
    }

    .button:hover {
        bottom: -4px;
        right: -4px;
        box-shadow: 4px 4px 0px red;
    }

    .button:active {
        bottom: -7px;
        right: -7px;
        box-shadow: 1px 1px 0px red;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>
test
<a href="/index">run index method</a>
nl2br
<a href="{{route('userposts')}}">named route</a>

nl2br
<a href="{{route('simplevalidation')}}">run a route specified middleware</a>

nl2br
<a href="/delete">run a grouped middleware</a>