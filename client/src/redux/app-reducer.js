const SET_INITIALIZED = 'client/app/SET_INITIALIZED';


let initialState = {
    initialized: false
};

const appReducer = ( state = initialState, action) => {

    switch(action.type) {
        case SET_INITIALIZED:
            return {
                ...state,
                initialized: true
                };
        default:
            return state;
        };
};

export const setInitializedSuccess = () => ({type: SET_INITIALIZED});
 
export const initializeApp = () => (dispatch) => {
    let promise = true;
    Promise.all([promise]).then(() => { 
        dispatch(setInitializedSuccess());
    });
}

export default appReducer;