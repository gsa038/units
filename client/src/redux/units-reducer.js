import {unitsAPI} from '../api/api';

const SET_UNITS = 'client/units/SET_UNITS';
const TOGGLE_IS_FETCHING = 'client/units/TOGGLE_IS_FETCHING';


let initialState = {    
    units: [],
    isFetching: false
}

const unitsReducer = ( state = initialState, action) => {

    switch(action.type) {
        case SET_UNITS: {
            return { ...state, units: action.units }
        }
        case TOGGLE_IS_FETCHING: {
            return { ...state, isFetching: action.isFetching}
        }
        default:
            return state
    }
}

export const setUnits = (units) => ({type: SET_UNITS, units})
export const toggleIsFetching = (isFetching) => ({type: TOGGLE_IS_FETCHING, isFetching})

export const getUnits = () => async (dispatch) => {
    dispatch(toggleIsFetching(true))

    let data = await unitsAPI.getUnits()
    dispatch(toggleIsFetching(false))
    dispatch(setUnits(data.data))
}

export default unitsReducer