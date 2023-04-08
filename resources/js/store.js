
import Vuex from 'vuex'
import axios from "axios";
import createPersistedState from 'vuex-persistedstate'




export default new Vuex.Store({
    state: {
        user: {}

    },
    mutations: {
        setUserState: (state, value) => state.user = value


    },
    actions: {
        userStateAction: (context) => {
            axios.get('api/users/me').then(response => {
                const  userResponse = response.data.user
                context.commit('setUserState', userResponse)
            })

        }
    },
    plugins: [ createPersistedState() ]

})
