<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

</head>
<body>

<h1>Welcome</h1>

<ul id="users">
    <li v-repeat="user: users">@{{ user.name }}</li>
</ul>
<script src="https://js.pusher.com/4.0/pusher.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.9/vue.min.js"></script>
<script>
    //            (function(){
    //                var pusher = new Pusher('02c5b12fd179bf67953d', {
    //                    encrypted: true
    //                });
    //
    //                var channel = pusher.subscribe('test');
    //
    //                channel.bind('App\\Events\\UserHasRegistered', function(data) {
    //                    console.log(data.name);
    //                });
    //
    //            })();
    new Vue({
        el: '#users',

        data:{
            users:[]
        },
        ready:function(){
            var pusher = new Pusher('02c5b12fd179bf67953d', {
                encrypted: true
            });

            pusher.subscribe('test')
                    .bind('App\\Events\\UserHasRegistered', this.addUser);
        },
        methods:{
            addUser: function(user){
                this.users.push(user);
            }
        }
    })

</script>
</body>
</html>
