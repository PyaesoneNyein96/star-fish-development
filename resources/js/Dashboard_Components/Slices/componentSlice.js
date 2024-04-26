import { createSlice } from "@reduxjs/toolkit";

const initialState = {
    studentToDetail: null,
    toDelete: null,
    updateAlert: false,
}

export const componentSlice = createSlice({
    name: "studentToDetail",
    initialState,
    reducers: {
        btnClickToDetail: (state, action) => {
            state.studentToDetail = action.payload;
        },
        btnClickToDelete: (state, action) => {
            state.toDelete = action.payload;
        },
        setUpdateAlert: (state) => {
            state.updateAlert = !state.updateAlert
        },
        setInitialUpdateAlert: (state, action) => {
            state.updateAlert = action.payload
        }
    }
})

export const { btnClickToDetail, btnClickToDelete, setUpdateAlert, setInitialUpdateAlert } = componentSlice.actions;

export default componentSlice.reducer
