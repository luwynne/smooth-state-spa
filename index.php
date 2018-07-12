<?php include('sidebar.php'); ?>


<style>
.page-enter-active, .page-leave-active {
  transition: opacity 1s, transform 1s;
}
.page-enter, .page-leave-to {
  opacity: 0;
  transform: translateX(-30%);
}
</style>

<div class="page-content page-content--homepage scene-main scene-main--fadeInRight">
  <div id="app">
    <router-link :to="{ name: 'home' }">Home</router-link>&nbsp;&nbsp;
    <router-link :to="{ name: 'projects-index' }">Project</router-link>&nbsp;&nbsp;
    <router-link :to="{ name: 'projects-setting' }">Setting</router-link>
    <hr>
    <transition name="page" mode="out-in">
    <!-- <transition name="page" mode="out-in"> -->
      <router-view></router-view>
    </transition>
  </div>


  <template id="home-page">
    <div>
      <transition name="page" mode="out-in">
        <router-view></router-view>
      </transition>
      <h1>Allo, Allo! First page here.</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id blanditiis rem odio, laudantium rerum, voluptas corporis, atque molestiae ab incidunt molestias tenetur. Consectetur quisquam vero, eos, suscipit quos quia laborum.</p><img src="http://placehold.it/2000x500/ccc/000?text=An+image" alt="">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus vel in obcaecati harum aperiam inventore, laboriosam non, ratione voluptate! Dolore cumque expedita consectetur saepe tenetur labore itaque distinctio! Provident tenetur rem maxime dolore delectus, earum quisquam excepturi nihil, neque voluptas, alias pariatur eum possimus in facilis. Dolor dignissimos accusantium accusamus eligendi tempore expedita mollitia corrupti, explicabo, blanditiis quia exercitationem cumque, facere. Possimus, consequuntur nostrum, laudantium voluptatibus reiciendis inventore. Recusandae sit molestiae repudiandae, quas nisi amet magni beatae fugiat explicabo quo omnis ducimus voluptatum provident consequatur expedita nihil quaerat nostrum porro, eveniet, temporibus soluta! Harum culpa voluptatum dolore corrupti, id ducimus.</p>
    </div>
  </template>



  <template id="projects-page">
    <div>
      <!-- <router-link :to="{ name: 'projects-index' }">Projects</router-link>
      <router-link :to="{ name: 'projects-setting' }">Setting</router-link> -->

      <!-- <transition name="slide-fade" mode="out-in"> -->
      <transition name="page" mode="out-in">
        <router-view></router-view>
      </transition>
    </div>
  </template>



  <template id="projects-index-page">
    <div>
      <transition name="page" mode="out-in">
        <router-view></router-view>
      </transition>
      <h3>Projects index</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi beatae voluptatem officia nam quod accusamus quaerat, quae necessitatibus hic provident quo magni, libero repudiandae tempora dolores at deserunt harum consequuntur.</p>
      <img src="http://placehold.it/2000x500/ccc/000?text=An+image" alt="">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi beatae voluptatem officia nam quod accusamus quaerat, quae necessitatibus hic provident quo magni, libero repudiandae tempora dolores at deserunt harum consequuntur.</p>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
    </div>
  </template>


  <template id="projects-setting-page">
    <div>
      <transition name="page" mode="out-in">
        <router-view></router-view>
      </transition>
      <h3>Projects settings</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi beatae voluptatem officia nam quod accusamus quaerat, quae necessitatibus hic provident quo magni, libero repudiandae tempora dolores at deserunt harum consequuntur.</p>
      <img src="http://placehold.it/2000x500/ccc/000?text=An+image" alt="">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi beatae voluptatem officia nam quod accusamus quaerat, quae necessitatibus hic provident quo magni, libero repudiandae tempora dolores at deserunt harum consequuntur.</p>
    </div>
  </template>

</div>




<script>

Vue.use(VueRouter)

const HomePage = Vue.component('home-page',{
  template: '#home-page'
})

const ProjectsRootPage = Vue.component('projects-page',{
  template: '#projects-page'
})

const ProjectsIndexPage = Vue.component('projects-index-page',{
  template: '#projects-index-page'
})
const ProjectsSettingPage = Vue.component('projects-setting-page',{
  template: '#projects-setting-page'
})

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomePage
  },
  {
    path: '/projects',
    name: 'projects',
    component: ProjectsRootPage,
    children: [
      {
        path: '',
        name: 'projects-index',
        component: ProjectsIndexPage
      },
      {
        path: '/setting',
        name: 'projects-setting',
        component: ProjectsSettingPage
      }
    ]
  }
]

const router = new VueRouter ({
  routes
})

new Vue({
  el: '#app',
  router
})
</script>


<?php include('footer.php'); ?>
