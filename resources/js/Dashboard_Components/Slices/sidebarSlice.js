import { createSlice } from "@reduxjs/toolkit";

const initialState = {
    sideOpen: true,
    selectItem: ""
}

export const sidebarSlice = createSlice({
    name: "sidebar",
    initialState,
    reducers: {
        update: (state) => {
            state.sideOpen = !state.sideOpen;
        },
        setSelectItem: (state, action) => {
            state.selectItem = action.payload
        }
    }
})

export const { update, setSelectItem } = sidebarSlice.actions;

export default sidebarSlice.reducer
