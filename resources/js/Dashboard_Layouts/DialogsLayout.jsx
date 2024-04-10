import React from 'react'

const DialogsLayout = ({ header, children }) => {
    return (
        <div className=' w-full h-[76.5vh] rounded-sm drop-shadow'>
            <div className=' grid grid-cols-2 gap-4 h-full'>
                {children}
            </div>
        </div >
    )
}

export default DialogsLayout
