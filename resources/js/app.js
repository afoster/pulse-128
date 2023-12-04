import { createApp } from 'vue'
import Echo from 'laravel-echo'
import Pusher from 'pusher-js'

const app = createApp({})

const echoOpts = {
    broadcaster: 'pusher',
    key: 'example',
    wsHost: window.location.hostname,
    wsPort: window.location.port,
    wsPath: '/ws',
    forceTLS: false,
    cluster: 'local',
    disableStats: true,
    enabledTransports: ['ws', 'wss']
}

window.Pusher = Pusher
window.Echo = new Echo({
    ...echoOpts,
})

app.mount('#app')
