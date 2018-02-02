<template>
<ul>
    <li v-for="notify in notifications">
        <a v-on:click="MarkAsRead(notify)">
            <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
        <span class="notification-text">{{JSON.parse(notify.data).from.name}}</span>
        <div class="notification-time">
            a few seconds ago
            <span class="glyph-icon icon-clock-o"></span>
        </div>
        </a>
    </li>
    <li v-if="notifications.length == 0">
                There is no new notifications
            </li>
    </ul>
</template>

<script>
    export default {
    props: ['notifications','userid'],
    // methods: {
    //     MarkAsRead: function(notify) {
    //         var data = {
    //             id: notify.id
    //         };
    //         axios.post('/notification/read', data).then(response => {
    //             window.location.href = "/post/" + notification.data.post.id;
    //         });
    //     }
    // }
    mounted(){
        Echo.private('App.User.' + 10)
        .notification((notification) => {
            console.log(notification);
        });
    }
    
        
    }
</script>
