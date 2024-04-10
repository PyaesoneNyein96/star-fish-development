import { createSlice } from "@reduxjs/toolkit";

const initialState = {
    studentToDetail: null,
    toDelete: null,
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
    }
})

export const { btnClickToDetail, btnClickToDelete } = componentSlice.actions;

export default componentSlice.reducer
