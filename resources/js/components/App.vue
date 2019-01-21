<template>
    <div id="app" >
        <topNav />
        <Nav />
        <div class="app-content content">
            <div class="content-wrapper">
                <router-view></router-view>
            </div>
        </div>

    </div>
</template>



<script>

    import Nav from './Nav';
    import topNav from './topNav';
  export default {
     components: {  Nav, topNav}
  }
</script>